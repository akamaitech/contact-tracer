<?= $this->extend('main/qr_main') ?>
<?= $this->section('data') ?>
   
   
<div class="container"></div>
      <img src="/assets/image/jj.jpg "class="img-fluid"alt="Responsive image">
      
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">COVID-19 Overview</h5>
              <p class="card-text">The coronavirus COVID-19 pandemic is the defining global health crisis of our time and the greatest challenge we have faced since World War Two. 
                Since its emergence in Asia late last year, the virus has spread to every continent except Antarctica.
                We have now reached the tragic milestone of one million deaths, and the human family is suffering under an almost intolerable burden of loss.
                “The climbing death toll is staggering, and we must work together to slow the spread of this virus.” - UNDP Administrator Achim Steiner.</p>
              
               <p> But the pandemic is much more than a health crisis, it's also an unprecedented socio-economic crisis. 
                Stressing every one of the countries it touches, it has the potential to create devastating social, economic and political effects that will leave deep and longstanding scars. 
                UNDP is the technical lead in the UN’s socio-economic recovery, alongside the health response, led by WHO, and the Global Humanitarian Response Plan, and working under the leadership of the UN Resident Coordinators.</p>

               <p> Every day, people are losing jobs and income, with no way of knowing when normality will return. 
                Small island nations, heavily dependent on tourism, have empty hotels and deserted beaches. 
                The International Labour Organization estimates that 400 million jobs could be lost.</p>
                
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Importance of Contact Tracing</h5>
              <p class="card-text">Contact tracing is an effective disease control strategy that involves identifying cases and their contacts then
                working with them to interrupt disease transmission. This includes asking cases to isolate and contacts to quarantine
                at home voluntarily. Contact tracing is a key strategy to prevent the further spread of COVID-19.</p>

              <p>Case investigation is the identification and investigation of patients with confirmed and probable diagnoses of
                COVID-19 (cases). Contact tracing, also referred to as contact investigation, is the identification, monitoring, and
                support of the individuals (contacts) who have been exposed to the patient and possibly infected themselves. This
                process prevents further transmission of disease by separating people who have (or may have) an infectious disease
                from people who do not.</p>

              <p>Successful case investigation and contact
                tracing for COVID-19 depends on a robust and well-trained
                public health workforce. Contact tracing requires staff
                with adequate training, excellent and tactful interpersonal
                skills, cultural sensitivity, and language and interviewing
                skills that allow them to build and maintain trust with
                clients and contacts.</p>
            </div>
          </div>
        </div>
        <div class="container-fluid">
        <?=$this->include('/footer/footer.php')?>
        </div>
        </div>
      
      
      
      
<?=$this->endsection()?>