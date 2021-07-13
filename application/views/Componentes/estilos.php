<style>
body {
    margin: 0;
    color: #6a6f8c;
    background: #c8c8c8;
    font: 600 16px/18px "Open Sans", sans-serif;
  }
  *,
  :after,
  :before {
    box-sizing: border-box;
  }
  .clearfix:after,
  .clearfix:before {
    content: "";
    display: table;
  }
  .clearfix:after {
    clear: both;
    display: block;
  }
  a {
    color: inherit;
    text-decoration: none;
  }
  
  .login-wrap {
    width: 100%;
    margin: auto;
    max-width: 900px;
    min-height: 600px;
    position: relative;
    background: url(https://i.pinimg.com/originals/3a/dc/17/3adc175eb91de8d287d762519757fbbe.jpg)
      no-repeat center;
    box-shadow: 0 20px 30px 0 rgba(143, 74, 221, 0.582),
      0 17px 50px 0 rgba(235, 4, 4, 0.849);
  }
  .login-html {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 90px 70px 50px 70px;
    background: rgba(71, 86, 196);
  }
  .login-html .sign-in-htm,
  .login-html .sign-up-htm {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all 0.4s linear;
  }
  .login-html .sign-in,
  .login-html .sign-up,
  .login-form .group .check {
    display: none;
  }
  .login-html .tab,
  .login-form .group .label,
  .login-form .group .button {
    text-transform: uppercase;
  }
  .login-html .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 20px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent;
  }
  .login-html .sign-in:checked + .tab,
  .login-html .sign-up:checked + .tab {
    color: rgb(193, 158, 240);
    border-color: #4182f1;
  }
  .login-form {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
  }
  .login-form .group {
    margin-bottom: 15px;
  }
  .login-form .group .label,
  .login-form .group .input,
  .login-form .group .button {
    width: 100%;
    color: #fff;
    display: block;
  }
  .login-form .group .input,
  .login-form .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.1);
  }
  .login-form .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle;
  }
  .login-form .group .label {
    color: #aaa;
    font-size: 12px;
  }
  .login-form .group .button {
    background: #1161ee;
  }
  .login-form .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255);
  }
  .login-form .group label .icon:before,
  .login-form .group label .icon:after {
    content: "";
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all 0.2s ease-in-out 0s;
  }
  .login-form .group label .icon:before {
    left: 30px;
    width: 50px;
    bottom: 60px;
    transform: scale(0) rotate(0);
  }
  .login-form .group label .icon:after {
    top: 60px;
    right: 0;
    transform: scale(0) rotate(0);
  }
  .login-form .group .check:checked + label {
    color: #fff;
  }
  .login-form .group .check:checked + label .icon {
    background: #1161ee;
  }
  .login-form .group .check:checked + label .icon:before {
    transform: scale(1) rotate(45deg);
  }
  .login-form .group .check:checked + label .icon:after {
    transform: scale(1) rotate(-45deg);
  }
  .login-html
    .sign-in:checked
    + .tab
    + .sign-up
    + .tab
    + .login-form
    .sign-in-htm {
    transform: rotate(0);
  }
  .login-html .sign-up:checked + .tab + .login-form .sign-up-htm {
    transform: rotate(0);
  }
  
  .hr {
    height: 20px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, 0.2);
  }
  .foot-lnk {
    text-align: center;
  }
</style>