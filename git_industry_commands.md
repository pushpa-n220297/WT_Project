#industry level git commands
practice
--- 
# git configuration commands
## 1. git config --global user.name
### syntax
git config --global user.name "your name"
### purpose
sets global username for commits
### example
git config --global user.name "pushpa"
### screenshot
<img width="487" height="34" alt="config_name" src="https://github.com/user-attachments/assets/63ae2628-4993-41d7-b7d8-c09a49cc0310" />

## 2. git config --global user.email
### syntax
```
git config --global user.email "your email"
```
### purpose
sets global user email for commits
### example
```
git config --global user.email "pushpa@gmail.com"
```
### screenshot
<img width="577" height="50" alt="config_email" src="https://github.com/user-attachments/assets/78a797f8-7fe4-4b1c-b2f0-cfd9dc3b7b36" />

## 3.git config --list
### syntax
git config --list
### purpose
displays all git configuration settings currently appplied on your system
it shows global, local and system configuration values
### example
git config --list
### screenshot
<img width="817" height="603" alt="config_list" src="https://github.com/user-attachments/assets/3ac3ca98-a350-408e-9878-6460a44c4ac5" />

## 4.git config --unset
### syntax
git config --unset user.name
### purpose
removes a specific git configuration value from the current scope(local or global)
### example
git config --unset --global user.name
### screenshot
<img width="525" height="73" alt="config_unset" src="https://github.com/user-attachments/assets/ab68d080-a994-4db6-8e32-986884619107" />

---
# git repository setup commands
## 5. git init
### Syntax
git init
### purpose
initializes a new git repository in the current directory.it creates a hidden '.git' folder that tracks version history
### example
git init
### screenshot
<img width="620" height="33" alt="git_init" src="https://github.com/user-attachments/assets/23ecec33-ec0b-4e42-bab4-cde3b68b2699" />

## 6. git clone
### Syntax
git clone your repo link
### purpose
creates a copy of an existing remote repository on your local machine. it downloads all files,branches and commit history
### example
git clone https://github.com/pushpa-n220297/WT_Project.git
### screenshot
<img width="543" height="141" alt="git_clone" src="https://github.com/user-attachments/assets/0ba48cbb-4d54-4b29-957a-f4264128d97b" />

## 7. git clone branch
### Syntax
git clone --branch your repo link
### purpose
clones a specific branch from a remote repository instead of cloning the default branch(usually main)
### example
git clone --branch https://github.com/pushpa-n220297/WT_Project.git
### screenshot
<img width="577" height="136" alt="git clone branch" src="https://github.com/user-attachments/assets/907f6411-8d2d-49b3-a04b-d94aad5edf88" />

## 8. git clone depth
### Syntax
git clone --depth 1 your repo link
### purpose
creates a shallow clone of a repository by downloading only a limited number of recent commits. this reduces download time and storage usage
### example
git clone --depth 1 https://github.com/pushpa-n220297/WT_Project.git
### screenshot
<img width="574" height="147" alt="clone depth" src="https://github.com/user-attachments/assets/421e2ba4-b7e0-4d48-aef8-5f80e1b75700" />

---
# git repository status and inspection commands
## 9.git status
### Syntax
git status
### purpose
display the current state of the working directory and staging area. it shows modified files,untracked files and branch info
### example
git status
### demo
<img width="483" height="439" alt="git status" src="https://github.com/user-attachments/assets/2c518a00-6dd3-4d0c-ba4a-bcaa99409aa2" />

## 10.git log
### Syntax
git log
### purpose
displays the complete commit history of the repository.it shows commit ID (hash),auhtor,name,date and commit changes
### example
git log
### demo
<img width="559" height="612" alt="git" src="https://github.com/user-attachments/assets/c8139988-45a5-41fc-9290-2c9f1d213968" />

