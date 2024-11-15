# 1. Biến môi trường cho dự án (Project)

Các biến này cung cấp thông tin về dự án GitLab.

- **CI_PROJECT_ID**: ID của dự án trong GitLab.  
  - Ví dụ: `123456`
- **CI_PROJECT_NAME**: Tên của dự án.  
  - Ví dụ: `my-project`
- **CI_PROJECT_NAMESPACE**: Tên không gian chứa dự án (namespace).  
  - Ví dụ: `my-group`
- **CI_PROJECT_URL**: URL của dự án trong GitLab.  
  - Ví dụ: [https://gitlab.com/my-group/my-project](https://gitlab.com/my-group/my-project)
- **CI_COMMIT_REF_NAME**: Tên của nhánh hoặc tag mà pipeline đang chạy.  
  - Ví dụ: `main`

# 2. Biến môi trường cho pipeline (Pipeline)

Các biến này cung cấp thông tin về pipeline hiện tại.

- **CI_PIPELINE_ID**: ID của pipeline.  
  - Ví dụ: `2345`
- **CI_PIPELINE_SOURCE**: Nguồn gốc pipeline được kích hoạt từ đâu (ví dụ: push, merge request).  
  - Ví dụ: `push`
- **CI_PIPELINE_URL**: URL của pipeline trên GitLab.  
  - Ví dụ: [https://gitlab.com/my-group/my-project/pipelines/2345](https://gitlab.com/my-group/my-project/pipelines/2345)

# 3. Biến môi trường cho job (Job)

Các biến này cung cấp thông tin về từng job cụ thể trong pipeline.

- **CI_JOB_ID**: ID của job hiện tại.  
  - Ví dụ: `7890`
- **CI_JOB_NAME**: Tên của job hiện tại.  
  - Ví dụ: `test-job`
- **CI_JOB_STAGE**: Tên của stage mà job hiện tại thuộc về.  
  - Ví dụ: `test`
- **CI_JOB_STATUS**: Trạng thái của job (ví dụ: success, failed).  
  - Ví dụ: `success`

# 4. Biến môi trường cho runner (Runner)

Các biến này cung cấp thông tin về runner đang thực thi job.

- **CI_RUNNER_ID**: ID của runner đang chạy job.  
  - Ví dụ: `6543`
- **CI_RUNNER_TAGS**: Các tag của runner.  
  - Ví dụ: `docker, linux`
- **CI_RUNNER_DESCRIPTION**: Mô tả của runner.  
  - Ví dụ: `Shared Runner on GitLab`

# 5. Biến môi trường cho Git và commit

Các biến này cung cấp thông tin về commit hoặc nhánh Git mà pipeline đang làm việc.

- **CI_COMMIT_SHA**: SHA của commit hiện tại.  
  - Ví dụ: `abc123def456`
- **CI_COMMIT_MESSAGE**: Nội dung thông điệp của commit hiện tại.  
  - Ví dụ: `Fix issue #123`
- **CI_COMMIT_AUTHOR**: Tác giả của commit.  
  - Ví dụ: `john.doe@example.com`

# 6. Biến môi trường cho môi trường (Environment)

Các biến này cung cấp thông tin về môi trường triển khai mà job hoặc pipeline liên quan.

- **CI_ENVIRONMENT_NAME**: Tên của môi trường mà job triển khai.  
  - Ví dụ: `production`
- **CI_ENVIRONMENT_URL**: URL của môi trường triển khai.  
  - Ví dụ: [https://myapp.com](https://myapp.com)
