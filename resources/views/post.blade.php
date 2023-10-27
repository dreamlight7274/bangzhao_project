<!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="app.css">
{{-- <script src="test.js"></script> --}}
<body>
<h1>Hello world</h1>



 <?php foreach ($posts as $subpost): ?>
<article>
<?= $subpost; ?>
</article>
<?php endforeach;  ?> 

{{-- <article>
<h1><a href="/post/post1">first post</a></h1>
<p>
  It was then that the fox appeared. 
  “Good morning,” said the fox.
  “Good morning,” the little prince responded politely, although when he turned around he saw nothing.
</p>
</article> --}}
{{--<article>
<h1><a href="/post/post2">second post</a></h1>
<p>
  “I am right here,” the voice said, “under the apple tree.”
  “Who are you?” asked the little prince, and added, “You are very pretty to look at.”
  “I am a fox,” said the fox.
  “Come and play with you,” proposed the little prince. “I am so unhappy.”
</p>
</article> --}}
{{--<article>
<h1><a href="/post/post3">third post</a></h1>
<p>
“I cannot play with you,” the fox said. “I am not tamed.”
“Ah! Please excuse me,” said the little prince.
But, after some thought, he added:
“What does that mean - ‘tame’?”
“You do not live here,” said the fox. “What is it that you are looking for?”
“I am looking for men,” said the little prince. “What does that mean - ‘tame’?”
</p>
</article> --}}
</body>