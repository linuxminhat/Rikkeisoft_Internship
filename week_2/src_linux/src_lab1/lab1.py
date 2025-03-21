import os
import gzip
import shutil

log_directory = '/var/log'

os.chdir(log_directory)
for filename in os.listdir(log_directory):
    if filename.endswith('.1') or filename.endswith('.old'):
        file_path = os.path.join(log_directory, filename)
        with open(file_path, 'rb') as f_in:
            with gzip.open(file_path + '.gz', 'wb') as f_out:
                shutil.copyfileobj(f_in, f_out)
        os.remove(file_path) 

print("Completed compressing old log files.")
