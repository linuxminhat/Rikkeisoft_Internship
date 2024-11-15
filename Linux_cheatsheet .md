# Linux Command Cheat Sheet

## General Commands
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `sudo [command]`      | Run `<command>` in superuser mode                        |
| `nohup [command]`     | Run `<command>` immune to hangup signal                  |
| `man [command]`       | Display help pages of `<command>`                        |
| `[command] &`         | Run `<command>` and send task to background              |
| `>> [fileA]`          | Append to `fileA`, preserving existing contents          |
| `> [fileA]`           | Output to `fileA`, overwriting contents                  |
| `echo -n`             | Display a line of text                                   |
| `xargs`               | Build command line from previous output                 |
| `1>2&`                | Redirect stdout to stderr                                |
| `fg %N`               | Go to task N                                             |
| `jobs`                | List tasks                                              |
| `ctrl-z`              | Suspend current task                                    |

---

## Disk Utilities
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `df -h, -i`           | File system usage                                        |
| `mkfs -t -V`          | Create file system                                       |
| `resize2fs`           | Update a filesystem after `lvextend`                    |
| `fsck -A -N`          | File system check & repair                               |
| `pvcreate`            | Create physical volume                                   |
| `mount -a -t`         | Mount a filesystem                                       |
| `fdisk -l`            | Edit disk partition                                      |
| `lvcreate`            | Create a logical volume                                  |
| `umount -f -v`        | Unmount a filesystem                                     |

---

## File Permissions
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `chmod -c -R`         | Change file read, write, and executable permissions      |
| `touch -a -t`         | Modify (or create) file timestamp                        |
| `chown -c -R`         | Change file ownership                                    |
| `chgrp -c -R`         | Change file group permission                             |

---

## File Utilities
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `tr -d`               | Translate or delete characters                           |
| `uniq -c -u`          | Report or omit repeated lines                            |
| `split -l`            | Split file into pieces                                   |
| `wc -w`               | Print newline, word, and byte counts for each file       |
| `head -n`             | Output the first part of files                           |
| `cut -s`              | Remove section from file                                 |
| `diff -q`             | File compare, line by line                               |
| `join -i`             | Join lines of two files on a common field                |
| `more, less`          | View file content, one page at a time                    |
| `sort -n`             | Sort lines in text file                                  |
| `comm -3`             | Compare two sorted files, line by line                   |
| `cat -s`              | Concatenate files to the standard output                 |
| `tail -f`             | Output the last part of the file                         |

---

## Directory Utilities
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `mkdir`               | Create a directory                                       |
| `rmdir`               | Remove a directory                                       |

---

## File Management
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `find`                | Search for a file                                        |
| `ls -a -C -h`         | List content of directory                                |
| `rm -r -f`            | Remove files and directory                               |
| `locate -i`           | Find file using `updatedb(8)` database                   |
| `cp -a -R -i`         | Copy files or directory                                  |
| `du -s`               | Disk usage                                               |
| `file -b -i`          | Identify the file type                                   |
| `mv -f -i`            | Move files or directory                                  |
| `grep, egrep, fgrep`  | Print lines matching pattern                             |

---

## File Compression
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `tar xvfz`            | Create or extract `.tar` or `.tgz` files                 |
| `gzip, gunzip, zcat`  | Create, extract, or view `.gz` files                     |
| `uuencode, uudecode`  | Create or extract `.Z` files                             |
| `zip, unzip -v`       | Create or extract `.ZIP` files                           |
| `rpm`                 | Create or extract `.rpm` files                           |
| `bzip2, bunzip2`      | Create or extract `.bz2` files                           |
| `rar`                 | Create or extract `.rar` files                           |

---

## File Editors
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `ex`                  | Basic editor                                             |
| `vi`                  | Visual editor                                            |
| `nano`                | Pico clone                                               |
| `view`                | View file only                                           |
| `emacs`               | Extensible, customizable editor                          |
| `sublime`             | Yet another text editor                                  |
| `sed`                 | Stream editor                                            |
| `pico`                | Simple editor                                            |

---

## Memory & Processes
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `free -m`             | Display free and used system memory                      |
| `killall`             | Stop all processes by name                               |
| `sensors`             | CPU temperature                                          |
| `top`                 | Display current processes, real-time monitoring          |
| `kill -1 -9`          | Send signal to process                                   |
| `service`             | Manage or run `sysV init` script                        |
| `ps aux`              | Display current processes, snapshot                      |
| `dmesg -k`            | Display system messages                                  |

---

## Network
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `netstat -r -v`       | Print network information, routing, and connections      |
| `telnet`              | User interface to the TELNET protocol                   |
| `tcpdump`             | Dump network traffic                                     |
| `ssh -i`              | OpenSSH client                                           |
| `ping -c`             | Print routing packet trace to host network               |

---

## Misc Commands
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `pwd -P`              | Print current working directory                          |
| `bc`                  | High precision calculator                                |
| `expr`                | Evaluate expression                                      |
| `cal`                 | Print calendar                                           |
| `export`              | Assign or remove environment variable                    |
| `` `[command]` ``     | Backquote, execute command                               |
| `date -d`             | Print formatted date                                     |
| `$[variable]`         | Access the variable if set                               |

---

## Scripting
| Command               | Description                                              |
|-----------------------|----------------------------------------------------------|
| `awk, gawk`           | Pattern scanning                                         |
| `tsh`                 | Tiny shell                                               |
| `" "`                 | Double quotes: escaped with `\` and `$` interpreted     |
| `' '`                 | Single quotes: content unchanged                        |
| `python`              | Object-oriented programming language                     |
| `bash`                | GNU Bourne-again Shell                                   |
| `ksh`                 | Korn Shell                                               |
| `php`                 | General-purpose scripting language                       |
| `csh, tcsh`           | C Shell                                                  |
| `perl`                | Practical Extraction and Report Language                 |
| `source [file]`       | Load any functions file into the current shell           |

---

Compiled by Dang Nhat Minh
