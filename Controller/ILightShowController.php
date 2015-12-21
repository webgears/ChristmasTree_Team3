<?php

namespace Controller;

interface ILightShowController
{
    /**
     * Returns an array with all the songs
     *
     * @return string[] The mp3 files
     * @throws \Exception
     */
    public function getSongs();

    /**
     * Plays the file
     *
     * @param $mp3_file
     */
    public function play($mp3_file);

    /**
     * Stops the music
     */
    public function stop();

    /**
     * Plays the playlist
     */
    public function playPlaylist();

    /**
     * @return array The content of the playlist
     */
    public function getPlaylistContent();

    /**
     * Adds a new entry to the playlist
     *
     * @param $title
     * @param $mp3_file
     * @return mixed
     */
    public function addToPlaylist($title, $mp3_file);

    /**
     * Clears the content of the playlist
     */
    public function clearPlaylist();
}