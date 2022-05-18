<html>
    <head>
        <title> Git Documentation!! </title> 
        <link type="text/css" rel="stylesheet" href="base.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php" class="back">&lArr; Home</a></li>
                <li><a href="tbd.php" class="forward"> TBD &rArr;</a></li>
            </ul>
        </nav>
        <h1>Git Commands</h1>
        <pre>
        repo -> repository

        clone -> bring a repo down from the internet (remote repository like Github) to your local machine
                 e.g. git clone &ltssh token from github repository&gt

        add -> track your files and changes with Git e.g. git add . (adds all files)

        status -> check to see which files are being tracked or need to be commited
                e.g. git status

        commit -> save your changes into Git 
                e.g. git commit -m "short message" -m "detailed desc"

        push -> push your changes to your remote repo on Github (or another website)
                e.g. git push origin master -> to push changes to Github
                in future we will be able to just say git push to push the changes to remote repository. -u is for upstream.
        
        pull -> pull changes down from the remote repo to your local machine   

        init -> use this command inside of your project to turn it into a Git repository and start using Git with that codebase 

        remote -> to add remote repo to a local git repo 
                e.g. git remote add origin &ltssh from github repository&gt
                if you created your own repo on local m/c, you need to connect it to remote repo 
                on Github

        </pre>
    
    </body>
</html>