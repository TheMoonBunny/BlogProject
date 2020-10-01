@extends('layouts.layout');
@section('content')
<div class="wrapper-text">
   
    <br>
    
            <p>
                <h1>How to use Github with GitBash</h1>
                <br>
                In this tutorial I will be explaining how to upload your first project to GitHub and how to update it afterwards with Git Bash.</p>
                <br>
           <p>Start off by doing the following:</p>
           <p>
           <ol>
            <li>Make a <a href="https://github.com/join">Github</a> account</li>
            <li>Download and install <a href="https://git-scm.com/">Git Bash</a></li>
            </ol> 
           <br>
           <p>
               Once you have install git bash, pick a project you want to upload and right click the folder.
               <br>
               <br>
               <br>
               <img src="img/articleimage/article1/tutorial1.jpg">
               <br>
               <br>
               <br>
               Make sure you have a project you want to upload it can be any unfinished project and choose the "Git Bash here" option.
               <br>
               <br>
               <br>
               <img src="img/articleimage/article1/tutorial2.png">
               <br>
               <br>
               you should have the following screen for your project.
               <br>
               <br>
               Now we have to make a Github repository so we can store your project on Github.
               <br>
               <img src="img/articleimage/article1/tutorial3.png">
                <br>
                <br>
                Make a repository and make it either public or private depending on what you intend to do with the project.
                <br>
                in this situation we wont be using readme option. 
                <br>
                <br>
                Once your repository is made copy your http url: 
                <br>
                <img src="img/articleimage/article1/tutorial4.jpg">
                <br>
                <br>
                We will now upload our project to Github via Git Bash.
                <br>
                By using the following line of codes
                <br>
                <pre><code>
                $ git init
                <br>
                $ git remote add origin git@github.com:username/new_repo
                <br>
                on the "$git remote add origin" you have to add your http url for the repository.
                <br>
                $ git push -u origin master
            </code></pre>
                    <br>
                    <br>
                <img src="img/articleimage/article1/tutorial5.jpg">
                <br>
                <br>
                <h3>congratulations you should have your first project uploaded in your repository!</h3>
            </pre>
            <br>
            <p>
                If you get the following error: 
                <br>
                <br>
                <img src="img/articleimage/article1/tutorial6.jpg">
                <br>
                do the following in the Git Bash terminal.
                <br>
                <pre><code>
                $touch initial
                <br>
                $git add initial
                <br>
                $git commit -m "initial commit"
                <br>
                $git push -u origin master
            </code></pre>
                <br>
                <br>
                <img src="img/articleimage/article1/tutorial7.jpg">
                <br>
                <br>
                You should have an initial file uploaded to see if its working.
                <br>
                Refresh your github repository and it should have an initial file uploaded.
                <br> now in order to upload all the files/folders after the initial file upload, you will have to do the following tricks.
                          
            <br>
    
            <br>
            <pre><code>
            $git add -A
            <br>
           $git commit -m "hi"
            <br>
            $git push
        </code></pre>
            <br>

                <img src="img/articleimage/article1/tutorial8.jpg">
                <br>
                <br>
                <img src="img/articleimage/article1/tutorial9.jpg">

             <br>
            <br>
                <h3>
                    congratulations again! now you definitly have your first project uploaded on Github with Git Bash!

                </h3>
            <br>
            <br>
            If you wanna update your github with the latest changes just do the following again:
            <br>
            <pre><code>
            $git add -A
            <br>
           $git commit -m "updated files"
            <br>
            $git push
        </code></pre>
            <br>
            <br>
            Hope this article helped you.
        </pre>
        <br>
        <br>
        <div class= "share-buttons"> 
            <!-- AddToAny BEGIN -->
            <a class="a2a_dd" href="https://www.addtoany.com/share"><img src="https://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share"></a>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
            </div>
    </div>    
@endsection