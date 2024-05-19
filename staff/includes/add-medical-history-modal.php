<div class="modal fade" id="addMedicalHistoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Add Medical History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addMedicalHistoryForm">
                    <p class="mb-2 fs-5">Patient ID: <span id="patient_id_med"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="physician">Name of Physician:</label>
                                <input type="text" class="form-control" id="physician" placeholder="Enter physician's name">
                            </div>

                            <div class="form-group">
                                <label for="officeAddress">Office Address:</label>
                                <input type="text" class="form-control" id="officeAddress" placeholder="Enter office address">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="specialty">Specialty (if applicable):</label>
                                <input type="text" class="form-control" id="specialty" placeholder="Enter specialty">
                            </div>
                            <div class="form-group">
                                <label for="officeNumber">Office Number:</label>
                                <input type="text" class="form-control" id="officeNumber" placeholder="Enter office number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>1. Are you in good health?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="goodHealth" id="goodHealthYes" checked value="yes">
                                <label class="form-check-label" for="goodHealthYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="goodHealth" id="goodHealthNo" value="no">
                                <label class="form-check-label" for="goodHealthNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>2. Are you in medical treatment now?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="medicalTreatment" id="medicalTreatmentYes" checked value="yes">
                                <label class="form-check-label" for="medicalTreatmentYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="medicalTreatment" id="medicalTreatmentNo" value="no">
                                <label class="form-check-label" for="medicalTreatmentNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="treatmentCondition">If so, what is the condition being treated?</label>
                                <input type="text" class="form-control" id="treatmentCondition" placeholder="Enter condition">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>3. Have you ever had a serious illness or surgical operation?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="seriousIllnessSurgery" id="seriousIllnessSurgeryYes" checked value="yes">
                                <label class="form-check-label" for="seriousIllnessSurgeryYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="seriousIllnessSurgery" id="seriousIllnessSurgeryNo" value="no">
                                <label class="form-check-label" for="seriousIllnessSurgeryNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="illnessSurgeryDetails">If so, what illness or operation?</label>
                                <textarea class="form-control" id="illnessSurgeryDetails" rows="3" placeholder="Enter details"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>4. Have you ever been hospitalized?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hospitalized" id="hospitalizedYes" checked value="yes">
                                <label class="form-check-label" for="hospitalizedYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hospitalized" id="hospitalizedNo" value="no">
                                <label class="form-check-label" for="hospitalizedNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="hospitalizationDetails">If so, when and why?</label>
                                <textarea class="form-control" id="hospitalizationDetails" rows="3" placeholder="Enter details"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>5. Are you taking any prescription/non-prescription medication?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="medications" id="medicationsYes" checked value="yes">
                                <label class="form-check-label" for="medicationsYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="medications" id="medicationsNo" value="no">
                                <label class="form-check-label" for="medicationsNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="medicationDetails">If so, please specify:</label>
                                <textarea class="form-control" id="medicationDetails" rows="3" placeholder="Enter medication details"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>6. Do you use tobacco products?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tobaccoUse" id="tobaccoUseYes" checked value="yes">
                                <label class="form-check-label" for="tobaccoUseYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tobaccoUse" id="tobaccoUseNo" value="no">
                                <label class="form-check-label" for="tobaccoUseNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>7. Do you use alcohol, cocaine, or other dangerous drugs?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="alcoholDrugs" id="alcoholDrugsYes" checked value="yes">
                                <label class="form-check-label" for="alcoholDrugsYes">Yes</label>
                            </div>
                            <div class="form -check">
                                <input class="form-check-input" type="radio" name="alcoholDrugs" id="alcoholDrugsNo" value="no">
                                <label class="form-check-label" for="alcoholDrugsNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>8. Are you allergic to any of the following?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="localAnesthetic" value="Local Anesthetic">
                                <label class="form-check-label" for="localAnesthetic">Local Anesthetic</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="penicilinAntibiotics" value="Penicillin Antibiotics">
                                <label class="form-check-label" for="penicilinAntibiotics">Penicillin Antibiotics</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="sulfaDrugs" value="Sulfa Drugs">
                                <label class="form-check-label" for="sulfaDrugs">Sulfa Drugs</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="aspirin" value="Aspirin">
                                <label class="form-check-label" for="aspirin">Aspirin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="latex" value="Latex">
                                <label class="form-check-label" for="latex">Latex</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="allergies[]" id="other1" value="Other1">
                                <label class="form-check-label" for="other1">Other</label>
                            </div>
                            <div class="form-group">
                                <label for="otherAllergies">If other, please specify:</label>
                                <input type="text" class="form-control" id="otherAllergies" placeholder="Enter other allergies">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bleedingTime">9. Bleeding Time:</label>
                            <input type="time" class="form-control" id="bleedingTime" placeholder="Enter bleeding time">
                        </div>

                        <div class="form-group">
                            <label>10. For women only:</label>
                            <div class="form-group ms-3">
                                <label>Are you in pregnant?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregnant" id="pregnantYes" checked value="yes">
                                    <label class="form-check-label" for="pregnantYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregnant" id="pregnantNo" value="no">
                                    <label class="form-check-label" for="pregnantNo">No</label>
                                </div>
                            </div>
                            <div class="form-group ms-3">
                                <label>Are you nursing?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nursing" id="nursingYes" checked value="yes">
                                    <label class="form-check-label" for="nursingYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nursing" id="nursingNo" value="no">
                                    <label class="form-check-label" for="nursingNo">No</label>
                                </div>
                            </div>
                            <div class="form-group ms-3">
                                <label>Are you birth control pills?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthControl" id="birthControlYes" checked value="yes">
                                    <label class="form-check-label" for="birthControlYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthControl" id="birthControlNo" value="no">
                                    <label class="form-check-label" for="birthControlNo">No</label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="bloodType">11. Blood Type</label>
                                <select class="form-control" id="bloodType" required>
                                    <option value="O negative">O-</option>
                                    <option value="O positive">O+</option>
                                    <option value="A negative">A-</option>
                                    <option value="A positive">A+</option>
                                    <option value="B negative">B-</option>
                                    <option value="B positive">B+</option>
                                    <option value="AB negative">AB-</option>
                                    <option value="AB positive">AB+</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bloodPressure">12. Blood Pressure</label>
                                <input type="text" class="form-control" id="bloodPressure" placeholder="Enter blood pressure">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Do you have or have you had any of the following? Check which apply:</label>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="highBloodPressure">
                                <label class="form-check-label" for="highBloodPressure">High Blood Pressure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="lowBloodPressure">
                                <label class="form-check-label" for="lowBloodPressure">Low Blood Pressure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="epilepsy">
                                <label class="form-check-label" for="epilepsy">Epilepsy / Convulsions</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="aids">
                                <label class="form-check-label" for="aids">AIDS / HIV Infection</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="std">
                                <label class="form-check-label" for="std">Sexually Transmitted Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="stomachTroubles">
                                <label class="form-check-label" for="stomachTroubles">Stomach Troubles / Ulcers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="faintingSeizure">
                                <label class="form-check-label" for="faintingSeizure">Fainting Seizure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="rapidWeightLoss">
                                <label class="form-check-label" for="rapidWeightLoss">Rapid Weight Loss</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="radiationTherapy">
                                <label class="form-check-label" for="radiationTherapy">Radiation Therapy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="jointReplacement">
                                <label class="form-check-label" for="jointReplacement">Joint Replacement / Implant</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="heartSurgery">
                                <label class="form-check-label" for="heartSurgery">Heart Surgery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="heartAttack">
                                <label class="form-check-label" for="heartAttack">Heart Attack</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="thyroidProblem">
                                <label class="form-check-label" for="thyroidProblem">Thyroid Problem</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="heartDisease">
                                <label class="form-check-label" for="heartDisease">Heart Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="heartMurmur">
                                <label class="form-check-label" for="heartMurmur">Heart Murmur</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="hepatitisLiverDisease">
                                <label class="form-check-label" for="hepatitisLiverDisease">Hepatitis / Liver Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="rheumaticFever">
                                <label class="form-check-label" for="rheumaticFever">Rheumatic Fever</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="hayFever">
                                <label class="form-check-label" for="hayFever">Hay Fever / Allergies</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="respiratoryProblems">
                                <label class="form-check-label" for="respiratoryProblems">Respiratory Problems</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="hepatitisJaundice">
                                <label class="form-check-label" for="hepatitisJaundice">Hepatitis / Jaundice</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="tuberculosis">
                                <label class="form-check-label" for="tuberculosis">Tuberculosis</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="suddenAnkles">
                                <label class="form-check-label" for="suddenAnkles">Swollen Ankles</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="kidneyDisease">
                                <label class="form-check-label" for="kidneyDisease">Kidney Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="diabetes">
                                <label class="form-check-label" for="diabetes">Diabetes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="chestPain">
                                <label class="form-check-label" for="chestPain">Chest Pain</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="stroke">
                                <label class="form-check-label" for="stroke">Stroke</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="cancer">
                                <label class="form-check-label" for="cancer">Cancer / Tumors</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="anemia">
                                <label class="form-check-label" for="anemia">Anemia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="angina">
                                <label class="form-check-label" for="angina">Angina</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="asthma">
                                <label class="form-check-label" for="asthma">Asthma</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="emphysema">
                                <label class="form-check-label" for="emphysema">Emphysema</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="bleedingProblems">
                                <label class="form-check-label" for="bleedingProblems">Bleeding Problems</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="bloodDiseases">
                                <label class="form-check-label" for="bloodDiseases">Blood Diseases</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="headInjuries">
                                <label class="form-check-label" for="headInjuries">Head Injuries</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="arthritisRheumatism">
                                <label class="form-check-label" for="arthritisRheumatism">Arthritis / Rheumatism</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hasFollowing[]" type="checkbox" id="other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>