
CREATE TABLE blogs
(
  id integer NOT NULL,
  title character varying(50) NOT NULL,
  email character varying(50) NOT NULL,
  created timestamp without time zone NOT NULL,
  CONSTRAINT primary_key PRIMARY KEY (id)
)

CREATE TABLE posts
(
  id integer NOT NULL,
  title character varying(50) NOT NULL,
  blog_id integer NOT NULL,
  created timestamp without time zone NOT NULL,
  CONSTRAINT posts_pkey PRIMARY KEY (id),
  CONSTRAINT blog_id_fk FOREIGN KEY (blog_id)
      REFERENCES blogs (id) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)

