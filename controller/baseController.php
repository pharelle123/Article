<?php

class Article{


static function userArticle(){ 
  $articles = ["cover" =>"./asset/cover.jpg",
  "title" => "Description de l'article",
  "content"=> "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores officia,
                     nesciunt saepe porro magni voluptas tempore deserunt quos 
                    magnam incidunt praesentium. Rem nostrum facere maiores molestias consectetur sit tempore similique!?"
];

  return $articles;
 }

}
$articles = Article::userArticle();
// print_r($articles) #test à regarder dans le tableau les données
//  $articles = Article::userArticle();

// foreach ($articles as $key => $value) {
//     $key === "cover" ? print "<img src=".$value."> " : false;
    
// }




// print "<figcaption>
//     <h2>"
//     .$articles["title"]."</h2>
//     <p>".$articles["content"]."</p>
//     </figcaption>"

//     ?>
