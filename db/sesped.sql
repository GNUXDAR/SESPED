--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: dp_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY dp_prof (id_prof, nom_prof, apel_prof, ci_prof, email_prof, fn_prof, ecivil_prof, grpf_prof, dir_prof, tlf_prof, tlf2_prof) FROM stdin;
2	ADRIAN	GUERRERO	20121211	gn@milicia.com.ve	2016-03-02	Soltero	HIJA	POZ	2123453456	\N
3	ADRIANA	GUERRERO	2134234	adriana@teca.com	2016-03-15	Soltero	MADRE	CHACARACUAL	7987	97979
4	VALERIA	CABRERA	2342354	ningun@ningun.com.ve	2013-08-20	SOLTERO	MAMA Y TIO Y ABUELA	CHACARACUAL	1232423423	\N
5	BRUNILDE	GUERRERO	10217039	nada	1969-10-06	SOLTERO	HIJOS	CHACARACUAL	234232	\N
1	ARTURO	CABRERA	19330646	GNUXDAR@GMAIL.COM	1989-09-18	CASADO	MADRE,ABUELA, TIO, SOBRINA	TUNAPUY	4267889948	\N
\.


--
-- Data for Name: acadmics_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY acadmics_prof (id_acadmics, pre_acadmics, post_acadmics, prom_acadmics, univ_academics, id_prof) FROM stdin;
1	ING INFORMATICA	DESARROLLADOR DE VIDEO GAMES	2016-03-10	HARVARD	1
4	YR	65	2016-03-16	R	\N
5	TSU GESTION AMBIENTAL		2016-03-09	SUCRE	\N
\.


--
-- Name: acadmics_prof_id_acadmics_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('acadmics_prof_id_acadmics_seq', 5, true);


--
-- Data for Name: actuacion_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY actuacion_prof (id_act, curs_act, tall_act, rec_act, form_act, even_act, tri_act, proy_sc_act, id_prof) FROM stdin;
1	HTML5 FIREFOX	FIREFOX	DESARROLLADOR WEB CON TECNOLOGIAS HTML5 Y CSS3 POR MOZILLA FIREFOX VENEZUELA	FACILITADOR DE CURSOS EN LA TECA INSTITUTO	CNSL	INVESTIGACION DE OPERACIONES		\N
\.


--
-- Name: actuacion_prof_id_act_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('actuacion_prof_id_act_seq', 1, true);


--
-- Name: dp_prof_id_prof_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('dp_prof_id_prof_seq', 5, true);


--
-- Data for Name: exp_laboral_prof; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY exp_laboral_prof (id_exp, inst_exp, anios_servc_exp, cargo_exp, des_cargo_exp, id_prof) FROM stdin;
1	TECSOLUTIONSMX	1	PROGRAMADOR	DESARROLLADOR DE APP WEB	1
\.


--
-- Name: exp_laboral_prof_id_exp_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('exp_laboral_prof_id_exp_seq', 1, true);


--
-- Data for Name: user_system; Type: TABLE DATA; Schema: public; Owner: gnuxdar
--

COPY user_system (id_user, ci_usr, login_usr, pass_usr, status_usr, id_prof) FROM stdin;
1	19330646	gnuxdar	123	1	1
\.


--
-- Name: user_system_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: gnuxdar
--

SELECT pg_catalog.setval('user_system_id_user_seq', 1, true);


--
-- PostgreSQL database dump complete
--

