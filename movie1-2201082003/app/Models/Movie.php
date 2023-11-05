<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => 8.5,
        ],

        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => 9.5,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => 8.7,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => 8.8,
        ],
        [
            'id' => 'tt1234567',
            'judul' => 'The Haunting of Hill House',
            'sinopsis' => 'A family confronts the haunting memories of their old home and the events that drove them from it.',
            'tahun' => 2018,
            'pemain' => ['Victoria Pedretti', 'Oliver Jackson-Cohen', 'Henry Thomas'],
            'foto_sampul' => 'download.jpeg',
            'rating' => 8.9,
        ],
        [
            'id' => 'tt0099871',
            'judul' => 'The Exorcist III',
            'sinopsis' => 'A police lieutenant and a priest team up to investigate a series of murders that may be linked to a sinister force.',
            'tahun' => 1990,
            'pemain' => ['George C. Scott', 'Ed Flanders', 'Brad Dourif'],
            'foto_sampul' => 'film-exorcist-iii-1990.jpg',
            'rating' => 8.3,
        ],
        [
            'id' => 'tt0081505',
            'judul' => 'The Shining',
            'sinopsis' => 'A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.',
            'tahun' => 1980,
            'pemain' => ['Jack Nicholson', 'Shelley Duvall', 'Danny Lloyd'],
            'foto_sampul' => 'film-my-shining-revenge-2023.jpg',
            'rating' => 8.8,
        ],
        [
            'id' => 'tt0054215',
            'judul' => 'Psycho',
            'sinopsis' => 'A secretary embezzles money, checks into a remote motel run by a disturbed innkeeper, and becomes the victim of his voyeurism, and murder.',
            'tahun' => 1960,
            'pemain' => ['Anthony Perkins', 'Janet Leigh', 'Vera Miles'],
            'foto_sampul' => 'film-psycho-2020.jpg',
            'rating' => 8.5,
        ],
        [
            'id' => 'tt0365376',
            'judul' => 'The Grudge',
            'sinopsis' => 'An American nurse living and working in Tokyo is exposed to a mysterious supernatural curse, one that locks a person in a powerful rage before claiming their life and spreading to another victim.',
            'tahun' => 2004,
            'pemain' => ['Sarah Michelle Gellar', 'Jason Behr', 'Clea DuVall'],
            'foto_sampul' => 'film-the-grudge-2020.jpg',
            'rating' => 8.6,
        ],
        [
            'id' => 'tt7137402',
            'judul' => 'Hereditary',
            'sinopsis' => 'A grieving family is haunted by tragic and disturbing occurrences following the death of their secretive grandmother.',
            'tahun' => 2018,
            'pemain' => ['Toni Collette', 'Milly Shapiro', 'Alex Wolff'],
            'foto_sampul' => 'film-hereditary-2018.jpg',
            'rating' => 8.2,
        ],
    ];



    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
