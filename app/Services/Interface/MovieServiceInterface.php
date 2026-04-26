<?php

namespace App\Services\Interface;

interface MovieServiceInterface{
    public function getMovie($search);
    public function getMovieById($id);
    public function getAllMovies();
    public function getCategories();
    public function createMovie($data , $file = null);
    public function updateMovie($id, $data, $file = null);
    public function deleteMovie($id);
}