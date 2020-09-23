@include('layouts.home-header')

<div class="container">
  <div class="grid sidebar-left clearfix">
    <div class="page-content">
      <h1>Payments</h1>
      <p class="sub-heading">You can purchase private number plates securely via our online shop – It’s fast, easy, safe, and secure. Vanity.Club offer a full money back guarantee in the unlikely event of a problem beyond our control.</p>

      <h2>Ways to pay for your private number plate</h2>
      <p>You can choose how you would like to pay. Our online order system lets you use choose to pay with any major debit or credit card or PayPal and we now even accept Apple Pay for a quick and easy checkout if using an apple device such as iPhone or iPad. You can even apply online for <a href="javascript:void(0);">finance</a>. Whilst we prefer the use of debit cards to reduce the costs we are charged, we have never charged additional fees for using the payment method of your choice. Once you are shown the price breakdown of your registration you are provided with payment options (icons)—just click the logo for your preferred payment type and proceed from there. (Business credit cards maybe subject to a surcharge on balance payments)</p>

      <p><img src="{{asset('images/223-payment-logos.png')}}" alt="Payment types accepted"></p>

      <h2>Secured by Sectigo</h2>
      <p>We use the highest level of encryption possible to ensure your details are kept 100% safe and secure. Buying through our website is more secure than using telephone or fax. Our website has been verified by Sectigo (formerly Comoda CA) and is protected by a secure EV (extended validation) SSL certificate. When buying your private number plate from Vanity.Club (a trading name of Classic Enterprises (UK) Ltd), our Barclays ordering system uses SSL (the most secure possible, and originally designed by the US Government) banking technology that ensures internet transactions stay private and protected during transmission. This is the most secure way possible of internet shopping. To process payments, we use Secure Trading Limited who are a specialist secure payment provider with over 20 years’ experience.</p>

      <h2>Valuable Number Plates</h2>
      <p>Just a $100 part payment by is sufficient to secure any number up to $5,000. $250 is required on purchases over  5,000 or 10% at the discretion of our sales advisors when ordering by telephone. Balance payments are required within 7 working days of invoice date, preferably by electronic Bank Transfer to ensure the most efficient service possible can be provided to both our purchasers and our donor suppliers (sellers). Alternatively Vanity.Club can accept a cheque or we can send you a link to make payment securely by Debit card.</p>

      <h2>Data Protection</h2>
      <p>We comply with the General Data Protection Regulation (GDPR) and as such have a legal duty to protect any information we collect from you. We use leading technologies to safeguard any sensitive data and encryption software to protect any card details you submit and keep strict security standards to prevent any unauthorised access to it. <strong>We will NEVER pass on your details</strong> to any third parties and we do not send random marketing emails to personal email addresses (spam). See our privacy policy for further information.</p>

      
    </div>

    <nav class="sidebar-menu searchfield open">
      <h4>Support</h4>
      <form action="" method="post" class="sidebar-search kb_search" role="search">
				<div class="field">
					<input type="text" name="query" class="kb_query" aria-label="Search">
					<input type="submit" value="Go" class="button">
				</div>
      </form>
      <ul class="sidebar-links">
        <li>
          <a href="{{url('faq')}}">FAQs</a>
        </li>
        <li>
          <a href="{{url('price-fees')}}">Prices &amp; Fees</a>
        </li>
        <li class="active">
          <a href="{{url('payments')}}">Payments</a>
        </li>
      </ul>
    </nav>

    <aside class="sidebar-promos">
      <div class="promo "> 
        <h4>OUR CREDIT IS PROVIDED BY</h4>
        <img src="{{asset('images/15-pay-by-finance.svg')}}" width="252" height="37" alt="Our credit is provided by"> <br><br>
        <p><strong>Authorised and regulated by the Financial Conduct Authority.</strong></p>
        <p>The credit advertised is provided exclusively by Hitachi Capital Consumer Finance with whom we have a commercial relationship.<br>
        &nbsp;<br>
        After requesting finance, you will receive an initial decision online, followed, (if accepted) by a postal agreement form to sign and send back to Hitachi Capital Consumer Finance.</p>
      </div>
      <div class="promo "> 
        <h4>YOU ARE SAFE & SECURE</h4>
        <img src="{{asset('images/14-sectigo-ssl.png')}}" width="210" height="83" alt="You Are Safe &amp; Secure"> <br><br>
        <p>We use the highest level of encryption possible to ensure your details are 100% safe and secure. Buying through our website is actually more secure than using a telephone.</p>
      </div>
    </aside>
  </div>
</div>


<!-- <div class="promo-wrapper">
  <div class="promo standard">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/22-make-your-own2.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">Make your own plate</h3>
      <p>Looking for a unique and stylish gift idea? Buy unissued Prefix or Current style number plates directly from us using our simple Make Your Own Number Plate service!</p>
      <a href="javascript:void(0);" title="Make your own plate" class="btnanim"><span>Learn more</span></a>
    </div>
  </div>

  <div class="promo standard text-black">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/21-auction-promo.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">The next DVLA Auction</h3>				
      <p>Search or view a list of private number plates to be sold at the next DVLA Auction, which will be held on <strong>13th to 15th May 2020</strong> at Oxford Belfry Hotel, Thame, OX9 2JW</p>	
      <a href="javascript:void(0);" title="The next DVLA Auction" class="btnanim"><span>Search now</span></a>
    </div>
  </div>
  
  <div class="promo standard ">
    <div class="image-box" style="background-image:url(https://www.carreg.co.uk/assets/promos/20-gift-voucher2.jpg);"></div>
    <div class="wrap">
      <h3 class="heading">Unsure which to buy?</h3>
      <p>If you’ve left it a little late or are unsure which number to buy, then available from £25 to £1000, a <strong>vanity.Club Gift Voucher</strong> is a great option and can be used against any number plate on our website.</p>
      <a href="javascript:void(0);" title="Unsure which to buy?" class="btnanim"><span>Learn more</span></a>
    </div>
	</div>
</div> -->
@include('layouts.footer')