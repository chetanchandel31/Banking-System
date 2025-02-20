<?php header("Content-type: text/css"); ?>

*{
    margin: 0;
    padding: 0;
}

body{
    padding: 4% 7%;
}

.alert{
    position: absolute;
    height: 4em;

}
.close{
    font-size: 3.2vw;
    display: inline-block;
    margin-top: -4%;
    margin-left: 98%;
    text-decoration: none;
}

.bg_holder{
    background: no-repeat url(../images/home_bg.jpg);
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
    padding:  6% 0;
}

.container1 {
    opacity:.8;
    background-color: rgb(238, 248, 248);
    font-size: 1.8vw;
    width: 36em;
    height: 16.5em;
    padding-bottom: 2em;
    margin: auto;

    display: flex;
    overflow: scroll;
    flex-direction: column;
    box-sizing: border-box;
}

.navbar1 {
    position: sticky;
    display: flex;
    justify-content: space-around;
    list-style: none;
    font-size: 2.6vw;
    width: 100%;
    height: 2em;
    margin: .65em 0 1em 0;
    padding: 0;
    margin-bottom: 1em;
}

.tab1 {
    padding: 0.4em;
}
.tab1:hover {
    cursor:pointer;
    transition-property: background-color ;
    transition-duration: 0.2s;
    background-color: rgb(206, 206, 227);
}

.active1{
    background-color: rgb(136, 58, 209);
}

.table{
    display: block;
    padding-left: 0.5em;
    font-size: 1.7vw;
}

.ctmr_list {
    min-height: 13em;
    margin-top: 0.3em;
    display: flex;
    flex-direction: column;
    list-style: none;
}

.ctmr {
    cursor: pointer;
    font-size: 2vw;
    width: 7em;
    padding-left: 1em;
    margin-top: 0.1em;
    margin-left: 4em;
    /* border: solid rgb(89, 89, 176) 0.8px; */
    border-radius: 5px;
    box-shadow: 0.09em 0.12em rgb(110 105 101);
    transition-property: color;
    transition-duration: 0.6s;
}

.ctmrbox{
    margin: 0;
    font-size: 2.2vw;
    width: 9em;
    border: solid rgb(89, 89, 176) 0.8px;

    text-align: center;
    height: 7.5em;
    padding-top: .1em;
    transition-property: color;
    transition-duration: 0.6s;
    /* transition: top 1s ease 0s; */
    position: absolute;
    top: 8em;
    left: 24em;

    /* transform:translate(7.5em, ); */
    /* height: parseInt(ctmrbox.style.clientheight) + 4 + "em"; */

}

.transfer_window{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.sendbox{
    display: flex;
    justify-content: space-around;
}

#customer1, #customer2{
    font-size: 1.9vw;
    width: 8.5em;
    height: 1.5em;
    margin-top: 1em;
}

.right_arrow{
    font-size: 3vw;
    position: relative;
    bottom: -0.6em;

}

#amount{
    font-size: 2.4vw;
    width: 8em;
    height: 1.1em;
    margin: 1.7em 9.48em 0em;
    border: solid black .5px;
}

#send_btn{
    font-size: 2.2vw;
    text-align: center;
    margin: auto;
    cursor: pointer;
    background-color: rgb(109, 109, 239);
    border-radius: 12%;
    width: 4em;
    height: 1.5em;
    margin-top: 1.1em;
}

#send_btn:hover{
    background-color: rgb(55, 55, 174);
}

.transaction_window{
    padding-top: 2em;
    padding-left: 3em;
}

.transaction{
    margin-bottom: .45em;
}





