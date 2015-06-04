<div class="ui fixed inverted purple menu">
  <div class="left menu">
    <a class="item" href="<?php echo site_url('home'); ?>">
        Geeckode
    </a>
  </div>
  <div class="right menu">
    <a href="<?php echo site_url('home'); ?>" class="item">
      <i class="home icon"></i>Home
    </a>
    <a href="<?php echo site_url('user/challenges'); ?>" class="active item">
      <i class="home icon"></i>Challenge
    </a>
    <a href="<?php echo site_url('profile'); ?>" class=" item">
     <div class="example">
      <img src="<?php echo $path; ?>"class="ui tiny avatar image"><?php echo $firstName; ?>
      </div>
    </a>
    <div class="ui dropdown item">
      <i class="settings icon"></i><i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="<?php echo site_url('main1'); ?>"><i class="off icon"></i> Logout</a>
      </div>
    </div>

  </div>
</div>
<br/><br/><br/><br/>
<h1><a href="">Online Compiler</a></h1>
<div class="ui two column relaxed grid">
  <div class="column">

        <form id="form-id" method="post">


                <input type="hidden" name="challenge_id" value="<?php echo $challenge_id; ?>" >
                <input type="hidden" name="challenge_name" value="<?php echo $challenge_name; ?>" >
                <input type="hidden" name="challenge_file" value="<?php echo $challenge_file_name; ?>" >
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="challenge_points" value="<?php echo $challenge_points; ?>" >

            <div>

                <div class="field"><br/>
                    <div class="ui fluid selection dropdown">
                      <div class="text">Select Language to use</div>
                        <i class="dropdown icon"></i>
                        <input type="hidden" name="lang" id="lang" >
                      <div class="menu">
                        <div class="item" data-value="7">Ada (gnat-4.3.2)</div>
                        <div class="item" data-value="13">Assembler (nasm-2.07)</div>
                        <div class="item" data-value="45">Assembler (gcc-4.3.4)</div>
                        <div class="item" data-value="104">AWK (gawk) (gawk-3.1.6)</div>
                        <div class="item" data-value="105">AWK (mawk) (mawk-1.3.3)</div>
                        <div class="item" data-value="28">Bash (bash 4.0.35)</div>
                        <div class="item" data-value="110">bc (bc-1.06.95)</div>
                        <div class="item" data-value="12">Brainf**k (bff-1.0.3.1)</div>
                        <div class="item" data-value="11">C (gcc-4.3.4)</div>
                        <div class="item" data-value="27">C# (mono-2.8)</div>
                        <div class="item" data-value="1">C++ (gcc-4.3.4)</div>
                        <div class="item" data-value="44">C++0x (gcc-4.5.1)</div>
                        <div class="item" data-value="34">C99 strict (gcc-4.3.4)</div>
                        <div class="item" data-value="14">CLIPS (clips 6.24)</div>
                        <div class="item" data-value="111">Clojure (clojure 1.1.0)</div>
                        <div class="item" data-value="118">COBOL (open-cobol-1.0)</div>
                        <div class="item" data-value="106">COBOL 85 (tinycobol-0.65.9)</div>
                        <div class="item" data-value="32">Common Lisp (clisp) (clisp 2.47)</div>
                        <div class="item" data-value="102">D (dmd) (dmd-2.042)</div>
                        <div class="item" data-value="36">Erlang (erl-5.7.3)</div>
                        <div class="item" data-value="124">F# (fsharp-2.0.0)</div>
                        <div class="item" data-value="123">Factor (factor-0.93)</div>
                        <div class="item" data-value="125">Falcon (falcon-0.9.6.6)</div>
                        <div class="item" data-value="107">Forth (gforth-0.7.0)</div>
                        <div class="item" data-value="5">Fortran (gfortran-4.3.4)</div>
                        <div class="item" data-value="114">Go (gc-2010-07-14)</div>
                        <div class="item" data-value="121">Groovy (groovy-1.7)</div>
                        <div class="item" data-value="21">Haskell (ghc-6.8.2)</div>
                        <div class="item" data-value="16">Icon (iconc 9.4.3)</div>
                        <div class="item" data-value="9">Intercal (c-intercal 28.0-r1)</div>
                        <div class="item" data-value="10">Java (sun-jdk-1.6.0.17)</div>
                        <div class="item" data-value="35">JavaScript (rhino) (rhino-1.6.5)</div>
                        <div class="item" data-value="112">JavaScript (spidermonkey) (spidermonkey-1.7)</div>
                        <div class="item" data-value="26">Lua (luac 5.1.4)</div>
                        <div class="item" data-value="30">Nemerle (ncc 0.9.3)</div>
                        <div class="item" data-value="25">Nice (nicec 0.9.6)</div>
                        <div class="item" data-value="122">Nimrod (nimrod-0.8.8)</div>
                        <div class="item" data-value="43">Objective-C (gcc-4.5.1)</div>
                        <div class="item" data-value="8">Ocaml (ocamlopt 3.10.2)</div>
                        <div class="item" data-value="119">Oz (mozart-1.4.0)</div>
                        <div class="item" data-value="22">Pascal (fpc) (fpc 2.2.0)</div>
                        <div class="item" data-value="2">Pascal (gpc) (gpc 20070904)</div>
                        <div class="item" data-value="3">Perl (perl 5.12.1)</div>
                        <div class="item" data-value="54">Perl 6 (rakudo-2010.08)</div>
                        <div class="item" data-value="29">PHP (php 5.2.11)</div>
                        <div class="item" data-value="19">Pike (pike 7.6.86)</div>
                        <div class="item" data-value="108">Prolog (gnu) (gprolog-1.3.1)</div>
                        <div class="item" data-value="15">Prolog (swi) (swipl 5.6.64)</div>
                        <div class="item" data-value="4">Python (python 2.6.4)</div>
                        <div class="item" data-value="116">Python 3 (python-3.1.2)</div>
                        <div class="item" data-value="117">R (R-2.11.1)</div>
                        <div class="item" data-value="17">Ruby (ruby-1.9.2)</div>
                        <div class="item" data-value="39">Scala (scala-2.8.0.final)</div>
                        <div class="item" data-value="33">Scheme (guile) (guile 1.8.5)</div>
                        <div class="item" data-value="23">Smalltalk (gst 3.1)</div>
                        <div class="item" data-value="40">SQL (sqlite3-3.7.3)</div>
                        <div class="item" data-value="38">Tcl (tclsh 8.5.7)</div>
                        <div class="item" data-value="62">Text (text 6.10)</div>
                        <div class="item" data-value="115">Unlambda (unlambda-2.0.0)</div>
                        <div class="item" data-value="101">Visual Basic .NET (mono-2.4.2.3)</div>
                        <div class="item" data-value="6">Whitespace (wspace 0.3)</div>
                      </div>
                    </div>
                </div>

            </div>
            <br/>
            <div class="ui form">
              <div class="field">
                <label for="source">Source Code:</label>
                <textarea name="source" id="source"></textarea>
              </div>
            </div>

            <!-- <div>
                <label for="input">Input: <span class="description">(Data that will be given to the program on the stdin.)</span></label>
                <textarea cols="40" rows="3" name="input" id="input"></textarea>
            </div> -->

            <div>
                <input type="submit" id="code" class="positive ui button" name="submit" value="Submit" />
            </div>
        </form>
  </div>
  <div class="column">
  <div class="ui info message">
        <div class="header">
            <h2>Problem Name:<br/>&nbsp;- <?php echo $challenge_name; ?></h2>
        </div>
    </div>
    <div class="ui info message">
        <div class="header">
            <h2>Problem Description:<br/>&nbsp;- <?php echo $challenge_desc; ?> </h2>
        </div>
    </div>
    <div class="ui info message">
        <div class="header">
            <h2>Problem Input:<br/>&nbsp;- <?php echo $challenge_input; ?> </h2>
        </div>
    </div>
    <div class="ui info message">
        <div class="header">
            <h2>Problem Output:<br/>&nbsp;- <?php echo $challenge_output; ?> </h2>
        </div>
    </div>
  </div>
</div>


        <div id="response">

            <div class="ui basic small modal">
                <i class="close icon"></i>
                <div class="ui success message">
                    <div class="header">

                    </div><br/>

                  <div class="content">
                    <div class="left">
                      <img class="circular ui small image" src="<?php echo $path; ?>"/>
                    </div>
                    <div class="right">
                        <h3><?php echo $firstName; ?> added </h3>
                        <div class="points"></div>
                        <h3>Output: </h3><div class="output"></div>
                    </div>

                    <!-- <div class="output">

                    </div> -->
                </div>
                    <div class="actions">
                        <a href="<?php echo base_url('home'); ?>"class="positive ui button" style="color:white;">Okay</a>
                    </div>
                  </div>
            </div>
                        <div class="error"></div>
        </div>