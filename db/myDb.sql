CREATE TABLE public.book (
	id	SERIAL NOT NULL PRIMARY KEY,
	title   VARCHAR(50),
	author  VARCHAR(50),
	prices  REAL
);

CREATE TABLE public.user (
	id	SERIAL NOT NULL PRIMARY KEY,
        fname   VARCHAR(50)  NOT NULL,
        lname   VARCHAR(50)  NOT NULL,
        address VARCHAR(250) NOT NULL,
        city    VARCHAR(50)  NOT NULL,
        state   VARCHAR(50)  NOT NULL,
        zip     VARCHAR(50)  NOT NULL
);

CREATE TABLE public.history (
        buy_date DATE NOT NULL,
	user_id  INT NOT NULL REFERENCES public.user(id),
	book_id  INT NOT NULL REFERENCES public.book(id)
);
