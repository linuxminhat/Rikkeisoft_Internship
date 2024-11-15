<?php

namespace App\Controllers;

use Framework\Listing;
use Framework\Session;
use Framework\Validation;
use Framework\Authorization;

class ListingController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Listing($config);
    }

    /*
     * Show all listings
     *
     * @return void
     */
    public function index()
    {
        $listings = $this->db->getAllListings();
        loadView('listings/index', [
            'listings' => $listings
        ]);

    }

    /**
     * Show the Create listing form
     *
     * @return void
     */

    public function create()
    {
        loadView('listings/create');
    }

    /**
     * Show a single listing
     * @param array $params
     * @return void
     */


    public function show($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];
        $listing = $this->db->getListingById($id);

        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }
        loadView('listings/show', [
            'listing' => $listing
        ]);


    }

    /**
     * Store a new listing
     * @return void
     */


    public function store()
    {
        $allowedFields = ['title', 'description', 'salary', 'requirements',
            'benefits', 'company', 'address', 'city', 'state', 'phone', 'email'];

        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = Session::get('user')['id'];

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = ['title', 'description', 'requirements',
            'company', 'email'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string(
                    $newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        if (!empty($errors)) {
            //Reload view with errors
            loadView('listings/create', [
                'errors' => $errors,
                'listing' => $newListingData
            ]);
            return;
        } else {
            $this->db->insert('listings', $newListingData);
            Session::setFlashMessage('success_message', 'Listing created successfully.');
            redirect('/listings');
        }
    }

    /**
     * Delete a listing
     *
     * @param array $params
     *
     */
    public function destroy($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];
        $listing = $this->db->getListingById($id);

        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }

        //Authorization
        if (!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error_message', 'Unauthorized to delete this listing.');
            return redirect('/listings/' . $listing->id);
        }

        $this->db->delete('listings', $id);

        //Set flash message
        Session::setFlashMessage('success_message', 'Listing deleted successfully.');
        redirect('/listings');
    }

    /**
     * Show the listing edit form
     *
     * @param array $params
     * @return void
     *
     */
    public function edit($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $listing = $this->db->getListingById($id);

        //Check existence of listing
        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }


        //Authorization
        if (!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error_message', 'Unauthorized to edit this listing.');
            return redirect('/listings/' . $listing->id);
        }


        loadView('listings/edit', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the listing edit form
     *
     * @param array $params
     * @return void
     */

    public function update($params)
    {
        $id = $params['id'] ?? '';

        $listing = $this->db->getListingById($id);

        if (!$listing) {
            ErrorController::notFound('Listing not found.');
            return;
        }

        //Authorization
        if (!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error_message', 'Unauthorized to update this listing.');
            return redirect('/listings/' . $listing->id);
        }

        $allowedFields = ['title', 'description', 'salary', 'requirements',
            'benefits', 'company', 'address', 'city', 'state', 'phone', 'email'];

        $updateValues = array_intersect_key($_POST, array_flip($allowedFields));
        $updateValues = array_map('sanitize', $updateValues);

        $requiredFields = ['title', 'requirements', 'company', 'email'];
        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        if (!empty($errors)) {
            loadView('listings/edit', [
                'listing' => $listing,
                'errors' => $errors
            ]);
            return;
        }

        $this->db->update('listings', $id, $updateValues);

        Session::setFlashMessage('success_message', 'Listing edited successfully.');
        redirect('/listings/' . $id);
    }

    /**
     * Search for listings based on search query
     *
     * @return void
     */
    public function search()
    {


        $keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';
        $location = isset($_GET['location']) ? trim($_GET['location']) : '';

        $listings = $this->db->searchListings($keywords, $location);

        loadView('listings/index', [
            'listings' => $listings,
            'keyword' => $keywords,
            'location' => $location
        ]);

    }

    /**
     * Show apllication form
     *
     *
     * @return void
     */
    public function create_apply($id)
    {

        $int_id = intval($id['id']);

        loadView('listings/apply',
            [
                'listing' =>
                    [
                        'id' => $int_id
                    ]
            ]);
    }

    /**
     * Store application for job
     *
     *
     * @return void
     */
    public function store_application()
    {

        $id = $_POST['listing_id'] ?? null;

        $allowedFields = ['name', 'email', 'city', 'state', 'skills'];


        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = Session::get('user')['id'];

        $newListingData['listing_id'] = $id;

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = ['name', 'email', 'city', 'state', 'skills'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string(
                    $newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        if (!empty($errors)) {
            //Reload view with errors
            loadView('listings/apply', [
                'errors' => $errors,
                'listing' => $newListingData
            ]);
            return;
        } else {
            $this->db->insert('application', $newListingData);
            Session::setFlashMessage('success_message', 'Application successfully.');
            redirect('/listings');
        }
    }
    /**
     * Show all application for job
     *
     *
     * @return void
     */
    public function application($id)
    {
        $int_id = intval($id['id']);

        $applications = $this->db->getAllApplications($int_id);
//        inspectAndDie($applications);
        loadView('listings/applications', [
            'applications' => $applications,
            'listing_id' => $int_id
        ]);
    }

}
