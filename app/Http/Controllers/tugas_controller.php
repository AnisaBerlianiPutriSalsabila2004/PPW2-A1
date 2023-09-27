public function menuAbout(){
    return view('about', [
        "tittle" => "About",
        "name" => "Alsa",
        "email" => "anisab464@gmail.com"
    ]);
}

public function menuHome(){
    return view('home', [
        "tittle" => "Home"
    ]);
}