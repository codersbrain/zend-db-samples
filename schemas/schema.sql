
-- DROP TABLE blogs;

CREATE TABLE blogs
(
  id integer NOT NULL,
  title character varying(50) NOT NULL,
  email character varying(50) NOT NULL,
  created timestamp without time zone NOT NULL,
  CONSTRAINT primary_key PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE blogs OWNER TO postgres;

-- DROP SEQUENCE blogs_id_seq;

CREATE SEQUENCE blogs_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 13
  CACHE 1;
ALTER TABLE blogs_id_seq OWNER TO taufek;

-- DROP TABLE posts;

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
WITH (
  OIDS=FALSE
);
ALTER TABLE posts OWNER TO taufek;



-- DROP SEQUENCE posts_id_seq;

CREATE SEQUENCE posts_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 13
  CACHE 1;
ALTER TABLE posts_id_seq OWNER TO taufek;

