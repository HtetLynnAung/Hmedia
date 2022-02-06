<?php

/* error_reporting(0);
ini_set('display_errors', 0);    */

class User {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    

    public function getAllNewsTitles(){
        $query = "SELECT news.id, news.title, news.body, news.image, news.category, news.content_writer, news.date  FROM news";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


        public function getNewsCount(){
        $query = "SELECT COUNT(*) c FROM news";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getNewsTitlesPagination($start_from, $num_per_page){
        $query = "SELECT *  FROM news LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getLivingStyleNewsPaginationEn($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'LivingStyle' && news.isEng = '1' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getLivingStyleNewsCountEn(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'LivingStyle' && news.isEng = '1'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public function getLivingStyleNewsPaginationMm($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'LivingStyle' && news.isEng = '0' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getLivingStyleNewsCountMm(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'LivingStyle' && news.isEng = '0'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public function getSportsNewsPaginationEn($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Sports' && news.isEng = '1' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getSportsNewsCountEn(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Sports' && news.isEng = '1'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	
	
    public function getSportsNewsCountMm(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Sports' && news.isEng = '0'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSportsNewsPaginationMm($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Sports' && news.isEng = '0' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	
	
    public function getCountryNewsPaginationEn($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Country' && news.isEng = '1' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCountryNewsCountEn(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Country' && news.isEng = '1'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	
	
    public function getCountryNewsCountMm(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Country' && news.isEng = '0'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCountryNewsPaginationMm($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Country' && news.isEng = '0' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

	
	
	
    public function getTravelNewsPaginationEn($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Travel' && news.isEng = '1' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getTravelNewsCountEn(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Travel' && news.isEng = '1'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
	
	
    public function getTravelNewsCountMm(){
        $query = "SELECT COUNT(*) c  FROM news WHERE news.category = 'Travel' && news.isEng = '0'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTravelNewsPaginationMm($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.category = 'Travel' && news.isEng = '0' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getSinglePost($post){
        $query = "SELECT *  FROM news WHERE news.id = $post";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getSinglePostByCategory($category){
        $query = "SELECT *  FROM news WHERE news.category = $category";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getAllMmNews($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.isEng = '0' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMmNewsCount(){
        $query = "SELECT COUNT(*) c FROM news WHERE news.isEng = '0'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecentMmNews(){
        $query = "SELECT * from news WHERE news.isEng = '0' order by date desc limit 3";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getAllCategoriesEn(){
        $query = "SELECT category, COUNT(category) FROM news WHERE news.isEng = '1'  GROUP BY category HAVING COUNT(category) >=1";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEnNews($start_from, $num_per_page){
        $query = "SELECT *  FROM news WHERE  news.isEng = '1' ORDER BY date desc LIMIT $start_from,$num_per_page";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEngNewsCount(){
        $query = "SELECT COUNT(*) c FROM news WHERE news.isEng = '1'";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecentEnNews(){
        $query = "SELECT * from news WHERE news.isEng = '1' order by date asc limit 3";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}