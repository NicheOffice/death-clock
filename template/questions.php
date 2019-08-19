<?php
if(parse_url(isset($_SERVER["HTTP_REFERER"]), PHP_URL_HOST) != parse_url(isset($config["url"]), PHP_URL_HOST)){
    redirect($config["url"]);
    die();
}
?>
<div id="session">
    <div class="progress" style="height: 1px;">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
             aria-valuemax="100"></div>
    </div>
    <br>
    <form id="questions" action="system/action.php" method="post">
        <fieldset id="1">
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q1"];
                    ?></p>                <input id="q1a" name="q1" type="radio" value="male"/>
                <label for="q1a"><i class="fa fa-male fa-5x"></i></label>
                <input id="q1b" name="q1" type="radio" value="female" required/>
                <label for="q1b"><i class="fa fa-female fa-5x"></i></label></div>
            <input type="button" name="password" class="next btn btn-block btn-primary"
                   value="<?php
                   echo $lang["next"];
                   ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q2"];
                    ?></p>                <input class="form-control" type="number" name="q2" maxlength="4" min="<?php
                echo date("Y") - 118;
                ?>"
                                                 max="<?php
                                                 echo date("Y") - 5;
                                                 ?>" autofocus required></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php echo $lang["q3"]; ?></p>
                <input id="q3a" name="q3" type="radio" value="smoke" required/>
                <label for="q3a"><i class="fa fa-check fa-5x"></i></label>
                <input id="q3b" name="q3" type="radio" value="no-smoke" required/>
                <label for="q3b"><i class="fa fa-times fa-5x"></i></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q4"];
                    ?></p>
                <input id="q4a" name="q4" type="radio" value="optimistic" required/><label for="q4a"
                                                                                           class="radio-optimistic"><i
                            class="fa fa-smile-o fa-5x"></i></label>
                <input id="q4b" name="q4" type="radio" value="neutral" required/><label for="q4b"
                                                                                        class="radio-neutral"><i
                            class="fa fa-meh-o fa-5x"></i></label>
                <input id="q4c" name="q4" type="radio" value="pessimistic" required/><label for="q4c"
                                                                                            class="radio-pessimistic"><i
                            class="fa fa-frown-o fa-5x"></i></label>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q5"];
                    ?></p>
                <select class="form-control" name="q5" autofocus required>
                    <option value="never"><?php echo $lang["q5a"]; ?></option>
                    <option value="1-month"><?php echo $lang["q5b"]; ?></option>
                    <option value="4-month"><?php echo $lang["q5c"]; ?></option>
                    <option value="2-week"><?php echo $lang["q5d"]; ?></option>
                    <option value="daily"><?php echo $lang["q5e"]; ?></option>
                </select>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q6"];
                    ?></p>
                <input class="form-control" id="q6" name="q6" type="number" min="40" max="150" autofocus required/>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q7"];
                    ?></p>
                <input class="form-control" id="q7" name="q7" type="number" min="110" max="243" autofocus
                       required/>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q8"];
                    ?></p>
                <select class="form-control" name="q8" autofocus required>
                    <option value="africa"><?php echo $lang["q81"]; ?></option>
                    <option value="antarctica"><?php echo $lang["q82"]; ?></option>
                    <option value="asia"><?php echo $lang["q83"]; ?></option>
                    <option value="australia"><?php echo $lang["q84"]; ?></option>
                    <option value="europe"><?php echo $lang["q85"]; ?></option>
                    <option value="north-america"><?php echo $lang["q86"]; ?></option>
                    <option value="south-america"><?php echo $lang["q87"]; ?></option>
                </select>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q9"];
                    ?></p>                <input id="q9a" name="q9" type="radio" value="city" required/>
                <label for="q9a"><i
                            class="fa fa-building fa-5x"></i><br><?php echo $lang["q9a"]; ?></label>
                <input id="q9b" name="q9" type="radio" value="village" required/>
                <label for="q9b"><i
                            class="fa fa-home fa-5x"></i><br><?php echo $lang["q9b"]; ?></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q10"];
                    ?></p>                <input id="q10a" name="q10" type="radio" value="yes" required/>
                <label for="q10a"><i class="fa fa-check fa-5x"></i></label>
                <input id="q10b" name="q10" type="radio" value="no" required/>
                <label for="q10b"><i class="fa fa-times fa-5x"></i></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q11"];
                    ?></p>
                <select class="form-control" name="q11" autofocus required>
                    <option value="unhealthly"><?php echo $lang["q11a"]; ?></option>
                    <option value="healthly"><?php echo $lang["q11b"]; ?></option>
                    <option value="vegan"><?php echo $lang["q11c"]; ?></option>
                </select>
            </div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q12"];
                    ?></p>                <input id="q12a" name="q12" type="radio" value="mentally" required/>
                <label for="q12a"><i class="fa fa-briefcase fa-5x"></i><br><?php echo $lang["q12a"]; ?></label>
                <input id="q12b" name="q12" type="radio" value="physically" required/>
                <label for="q12b"><i class="fa fa-cogs fa-5x"></i><br><?php echo $lang["q12b"]; ?></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q13"];
                    ?></p>                <input id="q13a" name="q13" type="radio" value="yes" required/>
                <label for="q13a"><i class="fa fa-check fa-5x"></i></label>
                <input id="q13b" name="q13" type="radio" value="no" required/>
                <label for="q13b"><i class="fa fa-times fa-5x"></i></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q14"];
                    ?></p>                <select class="form-control" name="q14" autofocus required>
                    <option value="4-6">4-6</option>
                    <option value="7-9">7-9</option>
                    <option value="10">10+</option>
                </select></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="button" name="next" class="next btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <p class="display-4"><?php
                    echo $lang["q15"];
                    ?></p>                 <input id="q15a" name="q15" type="radio" value="yes" required/>
                <label for="q15a"><i class="fa fa-check fa-5x"></i></label>
                <input id="q15b" name="q15" type="radio" value="no" required/>
                <label for="q15b"><i class="fa fa-times fa-5x"></i></label></div>
            <input type="button" name="previous" class="previous btn btn-default"
                   value="<?php
                   echo $lang["previous"];
                   ?>"/>
            <input type="submit" name="submit" class="submit btn btn-primary" value="<?php
            echo $lang["next"];
            ?>"/>
        </fieldset>
    </form>
</div>

<div id="startForm">
    <button id="send" class="btn btn-outline-dark btn-lg btn-block">
        <i class="fa fa-arrow-right"></i>
        <?php echo $lang["start"]; ?>
    </button>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="error">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $config["title"] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <?php echo $lang["noval"] ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $lang["close"] ?></button>
            </div>
        </div>
    </div>
</div>