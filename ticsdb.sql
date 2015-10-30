create table Users(
    nombre varchar(15),
    apellido varchar(15),
    avatar varchar(20),
    email varchar(30),
    username varchar(10),
    password int,
    status int,

    foreign key tutoria int
    references Tutoria(id)
);

create table Tutorias(
    id int,
    titulo varchar(15),
    texto text,
    fecha date,
    cupos real,
    tag varchar(15),

    foreign key user varchar(10)
    references Users(username)
);

create table Reviews(
    foreign key daReview varchar(10)
    references Users(username),

    foreign key recibeReview varchar(10)
    references Users(username),

    review text
);
