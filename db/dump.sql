--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: acadmics_prof; Type: TABLE; Schema: public; Owner: gnuxdar; Tablespace: 
--

CREATE TABLE acadmics_prof (
    id_acadmics integer NOT NULL,
    pre_acadmics character varying(50),
    post_acadmics character varying(50),
    prom_acadmics date,
    univ_acadmics_pre character varying(100),
    id_prof integer,
    pre_acadmics_valor integer NOT NULL,
    post_acadmics_valor integer,
    univ_acadmics_post character varying(100)
);


ALTER TABLE acadmics_prof OWNER TO gnuxdar;

--
-- Name: TABLE acadmics_prof; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON TABLE acadmics_prof IS 'datos academicos del profesional';


--
-- Name: COLUMN acadmics_prof.pre_acadmics; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN acadmics_prof.pre_acadmics IS 'estudios de pregrado';


--
-- Name: COLUMN acadmics_prof.post_acadmics; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN acadmics_prof.post_acadmics IS 'estudios de postgrado';


--
-- Name: COLUMN acadmics_prof.prom_acadmics; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN acadmics_prof.prom_acadmics IS 'anio de promocion del profesional';


--
-- Name: COLUMN acadmics_prof.univ_acadmics_pre; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN acadmics_prof.univ_acadmics_pre IS 'universidad donde estudio';


--
-- Name: acadmics_prof_id_acadmics_seq; Type: SEQUENCE; Schema: public; Owner: gnuxdar
--

CREATE SEQUENCE acadmics_prof_id_acadmics_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE acadmics_prof_id_acadmics_seq OWNER TO gnuxdar;

--
-- Name: acadmics_prof_id_acadmics_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: gnuxdar
--

ALTER SEQUENCE acadmics_prof_id_acadmics_seq OWNED BY acadmics_prof.id_acadmics;


--
-- Name: actuacion_prof; Type: TABLE; Schema: public; Owner: gnuxdar; Tablespace: 
--

CREATE TABLE actuacion_prof (
    id_act integer NOT NULL,
    curs_act character varying,
    tall_act character varying,
    rec_act character varying,
    form_act character varying,
    even_act character varying,
    tri_act character varying,
    proy_sc_act character varying,
    id_prof integer
);


ALTER TABLE actuacion_prof OWNER TO gnuxdar;

--
-- Name: TABLE actuacion_prof; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON TABLE actuacion_prof IS 'relacionado al area de conocimiento';


--
-- Name: COLUMN actuacion_prof.curs_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.curs_act IS 'cursos recibidos';


--
-- Name: COLUMN actuacion_prof.tall_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.tall_act IS 'talleres recibidos';


--
-- Name: COLUMN actuacion_prof.rec_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.rec_act IS 'reconocimientos obtenidos';


--
-- Name: COLUMN actuacion_prof.form_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.form_act IS 'formacion de talentos';


--
-- Name: COLUMN actuacion_prof.even_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.even_act IS 'evento asistidos o participados';


--
-- Name: COLUMN actuacion_prof.tri_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.tri_act IS 'trabajo de investigacion realizado';


--
-- Name: COLUMN actuacion_prof.proy_sc_act; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN actuacion_prof.proy_sc_act IS 'proyectos socio comunitarios';


--
-- Name: actuacion_prof_id_act_seq; Type: SEQUENCE; Schema: public; Owner: gnuxdar
--

CREATE SEQUENCE actuacion_prof_id_act_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE actuacion_prof_id_act_seq OWNER TO gnuxdar;

--
-- Name: actuacion_prof_id_act_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: gnuxdar
--

ALTER SEQUENCE actuacion_prof_id_act_seq OWNED BY actuacion_prof.id_act;


--
-- Name: dp_prof; Type: TABLE; Schema: public; Owner: gnuxdar; Tablespace: 
--

CREATE TABLE dp_prof (
    id_prof integer NOT NULL,
    nom_prof character varying(50),
    apel_prof character varying(50),
    ci_prof integer NOT NULL,
    email_prof character varying(30),
    fn_prof date,
    ecivil_prof character varying(10),
    grpf_prof character varying(100),
    dir_prof character varying(500),
    tlf_prof numeric,
    tlf2_prof integer
);


ALTER TABLE dp_prof OWNER TO gnuxdar;

--
-- Name: TABLE dp_prof; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON TABLE dp_prof IS 'datos personales del profesional';


--
-- Name: dp_prof_id_prof_seq; Type: SEQUENCE; Schema: public; Owner: gnuxdar
--

CREATE SEQUENCE dp_prof_id_prof_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dp_prof_id_prof_seq OWNER TO gnuxdar;

--
-- Name: dp_prof_id_prof_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: gnuxdar
--

ALTER SEQUENCE dp_prof_id_prof_seq OWNED BY dp_prof.id_prof;


--
-- Name: exp_laboral_prof; Type: TABLE; Schema: public; Owner: gnuxdar; Tablespace: 
--

CREATE TABLE exp_laboral_prof (
    id_exp integer NOT NULL,
    inst_exp character varying(50),
    anios_servc_exp integer,
    cargo_exp character varying(50),
    des_cargo_exp character varying(500),
    id_prof integer
);


ALTER TABLE exp_laboral_prof OWNER TO gnuxdar;

--
-- Name: COLUMN exp_laboral_prof.inst_exp; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN exp_laboral_prof.inst_exp IS 'instituto u organizacion';


--
-- Name: COLUMN exp_laboral_prof.anios_servc_exp; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN exp_laboral_prof.anios_servc_exp IS 'anios de servicio';


--
-- Name: COLUMN exp_laboral_prof.cargo_exp; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN exp_laboral_prof.cargo_exp IS 'cargo dentro de la institucion';


--
-- Name: COLUMN exp_laboral_prof.des_cargo_exp; Type: COMMENT; Schema: public; Owner: gnuxdar
--

COMMENT ON COLUMN exp_laboral_prof.des_cargo_exp IS 'descripcion del cargo';


--
-- Name: exp_laboral_prof_id_exp_seq; Type: SEQUENCE; Schema: public; Owner: gnuxdar
--

CREATE SEQUENCE exp_laboral_prof_id_exp_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE exp_laboral_prof_id_exp_seq OWNER TO gnuxdar;

--
-- Name: exp_laboral_prof_id_exp_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: gnuxdar
--

ALTER SEQUENCE exp_laboral_prof_id_exp_seq OWNED BY exp_laboral_prof.id_exp;


--
-- Name: user_system; Type: TABLE; Schema: public; Owner: gnuxdar; Tablespace: 
--

CREATE TABLE user_system (
    id_user integer NOT NULL,
    ci_usr integer NOT NULL,
    login_usr character varying NOT NULL,
    pass_usr character varying NOT NULL,
    status_usr integer NOT NULL,
    id_prof integer
);


ALTER TABLE user_system OWNER TO gnuxdar;

--
-- Name: user_system_id_user_seq; Type: SEQUENCE; Schema: public; Owner: gnuxdar
--

CREATE SEQUENCE user_system_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_system_id_user_seq OWNER TO gnuxdar;

--
-- Name: user_system_id_user_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: gnuxdar
--

ALTER SEQUENCE user_system_id_user_seq OWNED BY user_system.id_user;


--
-- Name: id_acadmics; Type: DEFAULT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY acadmics_prof ALTER COLUMN id_acadmics SET DEFAULT nextval('acadmics_prof_id_acadmics_seq'::regclass);


--
-- Name: id_act; Type: DEFAULT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY actuacion_prof ALTER COLUMN id_act SET DEFAULT nextval('actuacion_prof_id_act_seq'::regclass);


--
-- Name: id_prof; Type: DEFAULT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY dp_prof ALTER COLUMN id_prof SET DEFAULT nextval('dp_prof_id_prof_seq'::regclass);


--
-- Name: id_exp; Type: DEFAULT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY exp_laboral_prof ALTER COLUMN id_exp SET DEFAULT nextval('exp_laboral_prof_id_exp_seq'::regclass);


--
-- Name: id_user; Type: DEFAULT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY user_system ALTER COLUMN id_user SET DEFAULT nextval('user_system_id_user_seq'::regclass);


--
-- Data for Name: acadmics_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY acadmics_prof (id_acadmics, pre_acadmics, post_acadmics, prom_acadmics, univ_acadmics_pre, id_prof, pre_acadmics_valor, post_acadmics_valor, univ_acadmics_post) FROM stdin;
\.


--
-- Name: acadmics_prof_id_acadmics_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('acadmics_prof_id_acadmics_seq', 20, true);


--
-- Data for Name: actuacion_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY actuacion_prof (id_act, curs_act, tall_act, rec_act, form_act, even_act, tri_act, proy_sc_act, id_prof) FROM stdin;
\.


--
-- Name: actuacion_prof_id_act_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('actuacion_prof_id_act_seq', 5, true);


--
-- Data for Name: dp_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY dp_prof (id_prof, nom_prof, apel_prof, ci_prof, email_prof, fn_prof, ecivil_prof, grpf_prof, dir_prof, tlf_prof, tlf2_prof) FROM stdin;
\.


--
-- Name: dp_prof_id_prof_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('dp_prof_id_prof_seq', 23, true);


--
-- Data for Name: exp_laboral_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY exp_laboral_prof (id_exp, inst_exp, anios_servc_exp, cargo_exp, des_cargo_exp, id_prof) FROM stdin;
\.


--
-- Name: exp_laboral_prof_id_exp_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('exp_laboral_prof_id_exp_seq', 3, true);


--
-- Data for Name: user_system; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY user_system (id_user, ci_usr, login_usr, pass_usr, status_usr, id_prof) FROM stdin;
\.


--
-- Name: user_system_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('user_system_id_user_seq', 4, true);


--
-- Name: acadmics_prof_pkey; Type: CONSTRAINT; Schema: public; Owner: gnuxdar; Tablespace: 
--

ALTER TABLE ONLY acadmics_prof
    ADD CONSTRAINT acadmics_prof_pkey PRIMARY KEY (id_acadmics);


--
-- Name: actuacion_prof_pkey; Type: CONSTRAINT; Schema: public; Owner: gnuxdar; Tablespace: 
--

ALTER TABLE ONLY actuacion_prof
    ADD CONSTRAINT actuacion_prof_pkey PRIMARY KEY (id_act);


--
-- Name: dp_prof_pkey; Type: CONSTRAINT; Schema: public; Owner: gnuxdar; Tablespace: 
--

ALTER TABLE ONLY dp_prof
    ADD CONSTRAINT dp_prof_pkey PRIMARY KEY (id_prof);


--
-- Name: exp_laboral_prof_pkey; Type: CONSTRAINT; Schema: public; Owner: gnuxdar; Tablespace: 
--

ALTER TABLE ONLY exp_laboral_prof
    ADD CONSTRAINT exp_laboral_prof_pkey PRIMARY KEY (id_exp);


--
-- Name: user_system_pkey; Type: CONSTRAINT; Schema: public; Owner: gnuxdar; Tablespace: 
--

ALTER TABLE ONLY user_system
    ADD CONSTRAINT user_system_pkey PRIMARY KEY (id_user);


--
-- Name: acadmics_prof_id_prof_fkey; Type: FK CONSTRAINT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY acadmics_prof
    ADD CONSTRAINT acadmics_prof_id_prof_fkey FOREIGN KEY (id_prof) REFERENCES dp_prof(id_prof) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: actuacion_prof_id_prof_fkey; Type: FK CONSTRAINT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY actuacion_prof
    ADD CONSTRAINT actuacion_prof_id_prof_fkey FOREIGN KEY (id_prof) REFERENCES dp_prof(id_prof) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: exp_laboral_prof_id_prof_fkey; Type: FK CONSTRAINT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY exp_laboral_prof
    ADD CONSTRAINT exp_laboral_prof_id_prof_fkey FOREIGN KEY (id_prof) REFERENCES dp_prof(id_prof) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_system_id_prof_fkey; Type: FK CONSTRAINT; Schema: public; Owner: gnuxdar
--

ALTER TABLE ONLY user_system
    ADD CONSTRAINT user_system_id_prof_fkey FOREIGN KEY (id_prof) REFERENCES dp_prof(id_prof) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: gnuxdar
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM gnuxdar;
GRANT ALL ON SCHEMA public TO gnuxdar;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- gnuxdarQL database dump complete
--

