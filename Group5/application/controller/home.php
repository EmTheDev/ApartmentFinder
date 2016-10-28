<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
	 *
	 * To re-add functions that I deleted go to header.php
     */
    public function exampleOne()
    {
        // load views
        $songs = $this->model->getAllSongs();
        $amount_of_songs = $this->model->getAmountOfSongs();
        $users = $this->model->getAllUsers();
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_one.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function exampleTwo()
    {
        echo "I'm here";
    }

	// not sure this is ever used
    function searchPlace($search) {
        // if we have an id of a song that should be edited
        if (isset($search)) {
            // do getSong() in model/model.php
            $data = $this->databaseAPI->searchPlace($search);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/songs/index.php';
            } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'home/index');
        }
    }
}
