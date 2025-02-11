function validateForm(){
    let name = document.forms["age_calc_form"]["name"].value;
    let last_name = document.forms["age_calc_form"]["last_name"].value;
    let age = Number(document.forms["age_calc_form"]["age"].value);
    let age_counter = Number(document.forms["age_calc_form"]["age_counter"].value);

    let total_age = age + age_counter;

    let output_text = `Hallo ik ben ${name} ${last_name}. Over ${age_counter} jaar ben ik ${total_age}!`;

    document.getElementById('output').innerText = output_text;
    return false; // Prevent form submission
}