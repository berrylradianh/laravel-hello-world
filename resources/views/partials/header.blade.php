<div class="header">
    <div class="logo"><a href="/"><img src={{asset('images/logo.gif')}} alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li class="{{ ($title === "Home")? 'selected' : '' }}"><a href="/">home</a></li>
        <li class="{{ ($title === "About")? 'selected' : '' }}"><a href="about">about us</a></li>
        <li class="{{ ($title === "Category")? 'selected' : '' }}"><a href="category">flowers</a></li>
        <li class="{{ ($title === "Specials")? 'selected' : '' }}"><a href="specials">specials gifts</a></li>
        <li class="{{ ($title === "My Account")? 'selected' : '' }}"><a href="myaccount">my account</a></li>
        <li class="{{ ($title === "Register")? 'selected' : '' }}"><a href="register2">register</a></li>
        <li class="{{ ($title === "Details")? 'selected' : '' }}"><a href="details">prices</a></li>
        <li class="{{ ($title === "Contact")? 'selected' : '' }}"><a href="contact">contact</a></li>
      </ul>
    </div>
</div>
