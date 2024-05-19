<div class="modal fade" id="editMedicalHistoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-1" id="exampleModalLabel">Add Medical History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editMedicalHistoryForm">
                    <p class="mb-2 fs-5">Patient ID: <span id="e_patient_id_med"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e_physician">Name of Physician:</label>
                                <input type="text" class="form-control" id="e_physician" placeholder="Enter physician's name">
                            </div>

                            <div class="form-group">
                                <label for="e_officeAddress">Office Address:</label>
                                <input type="text" class="form-control" id="e_officeAddress" placeholder="Enter office address">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e_specialty">Specialty (if applicable):</label>
                                <input type="text" class="form-control" id="e_specialty" placeholder="Enter specialty">
                            </div>
                            <div class="form-group">
                                <label for="e_officeNumber">Office Number:</label>
                                <input type="text" class="form-control" id="e_officeNumber" placeholder="Enter office number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>1. Are you in good health?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_goodHealth" id="e_goodHealthYes" checked value="yes">
                                <label class="form-check-label" for="e_goodHealthYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_goodHealth" id="e_goodHealthNo" value="no">
                                <label class="form-check-label" for="e_goodHealthNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>2. Are you in medical treatment now?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_medicalTreatment" id="e_medicalTreatmentYes" checked value="yes">
                                <label class="form-check-label" for="e_medicalTreatmentYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_medicalTreatment" id="e_medicalTreatmentNo" value="no">
                                <label class="form-check-label" for="e_medicalTreatmentNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="e_treatmentCondition">If so, what is the condition being treated?</label>
                                <input type="text" class="form-control" id="e_treatmentCondition" placeholder="Enter condition">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>3. Have you ever had a serious illness or surgical operation?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_seriousIllnessSurgery" id="e_seriousIllnessSurgeryYes" checked value="yes">
                                <label class="form-check-label" for="e_seriousIllnessSurgeryYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_seriousIllnessSurgery" id="e_seriousIllnessSurgeryNo" value="no">
                                <label class="form-check-label" for="e_seriousIllnessSurgeryNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="e_illnessSurgeryDetails">If so, what illness or operation?</label>
                                <textarea class="form-control" id="e_illnessSurgeryDetails" rows="3" placeholder="Enter details"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>4. Have you ever been hospitalized?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_hospitalized" id="e_hospitalizedYes" checked value="yes">
                                <label class="form-check-label" for="e_hospitalizedYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_hospitalized" id="e_hospitalizedNo" value="no">
                                <label class="form-check-label" for="e_hospitalizedNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="e_hospitalizationDetails">If so, when and why?</label>
                                <textarea class="form-control" id="e_hospitalizationDetails" rows="3" placeholder="Enter details"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>5. Are you taking any prescription/non-prescription medication?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_medications" id="e_medicationsYes" checked value="yes">
                                <label class="form-check-label" for="e_medicationsYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_medications" id="e_medicationsNo" value="no">
                                <label class="form-check-label" for="e_medicationsNo">No</label>
                            </div>
                            <div class="form-group">
                                <label for="e_medicationDetails">If so, please specify:</label>
                                <textarea class="form-control" id="e_medicationDetails" rows="3" placeholder="Enter medication details"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>6. Do you use tobacco products?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_tobaccoUse" id="e_tobaccoUseYes" checked value="yes">
                                <label class="form-check-label" for="e_tobaccoUseYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_tobaccoUse" id="e_tobaccoUseNo" value="no">
                                <label class="form-check-label" for="e_tobaccoUseNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>7. Do you use alcohol, cocaine, or other dangerous drugs?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="e_alcoholDrugs" id="e_alcoholDrugsYes" checked value="yes">
                                <label class="form-check-label" for="e_alcoholDrugsYes">Yes</label>
                            </div>
                            <div class="form -check">
                                <input class="form-check-input" type="radio" name="e_alcoholDrugs" id="e_alcoholDrugsNo" value="no">
                                <label class="form-check-label" for="e_alcoholDrugsNo">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>8. Are you allergic to any of the following?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_localAnesthetic" value="Local Anesthetic">
                                <label class="form-check-label" for="e_localAnesthetic">Local Anesthetic</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_penicilinAntibiotics" value="Penicillin Antibiotics">
                                <label class="form-check-label" for="e_penicilinAntibiotics">Penicillin Antibiotics</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_sulfaDrugs" value="Sulfa Drugs">
                                <label class="form-check-label" for="e_sulfaDrugs">Sulfa Drugs</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_aspirin" value="Aspirin">
                                <label class="form-check-label" for="e_aspirin">Aspirin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_latex" value="Latex">
                                <label class="form-check-label" for="e_latex">Latex</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="e_allergies[]" id="e_other1" value="Other1">
                                <label class="form-check-label" for="e_other1">Other</label>
                            </div>
                            <div class="form-group">
                                <label for="e_otherAllergies">If other, please specify:</label>
                                <input type="text" class="form-control" id="e_otherAllergies" placeholder="Enter other allergies">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="e_bleedingTime">9. Bleeding Time:</label>
                            <input type="time" class="form-control" id="e_bleedingTime" placeholder="Enter bleeding time">
                        </div>

                        <div class="form-group">
                            <label>10. For women only:</label>
                            <div class="form-group ms-3">
                                <label>Are you in pregnant?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_pregnant" id="e_pregnantYes" checked value="yes">
                                    <label class="form-check-label" for="e_pregnantYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_pregnant" id="e_pregnantNo" value="no">
                                    <label class="form-check-label" for="e_pregnantNo">No</label>
                                </div>
                            </div>
                            <div class="form-group ms-3">
                                <label>Are you nursing?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_nursing" id="e_nursingYes" checked value="yes">
                                    <label class="form-check-label" for="e_nursingYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_nursing" id="e_nursingNo" value="no">
                                    <label class="form-check-label" for="e_nursingNo">No</label>
                                </div>
                            </div>
                            <div class="form-group ms-3">
                                <label>Are you birth control pills?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_birthControl" id="e_birthControlYes" checked value="yes">
                                    <label class="form-check-label" for="e_birthControlYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="e_birthControl" id="e_birthControlNo" value="no">
                                    <label class="form-check-label" for="e_birthControlNo">No</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="e_bloodType">11. Blood Type</label>
                                <input type="text" class="form-control" id="e_bloodType" placeholder="Enter blood type">
                            </div>
                            <div class="form-group">
                                <label for="e_bloodPressure">12. Blood Pressure</label>
                                <input type="text" class="form-control" id="e_bloodPressure" placeholder="Enter blood pressure">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Do you have or have you had any of the following? Check which apply:</label>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_highBloodPressure">
                                <label class="form-check-label" for="e_highBloodPressure">High Blood Pressure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_lowBloodPressure">
                                <label class="form-check-label" for="e_lowBloodPressure">Low Blood Pressure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_epilepsy">
                                <label class="form-check-label" for="e_epilepsy">Epilepsy / Convulsions</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_aids">
                                <label class="form-check-label" for="e_aids">AIDS / HIV Infection</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_std">
                                <label class="form-check-label" for="e_std">Sexually Transmitted Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_stomachTroubles">
                                <label class="form-check-label" for="e_stomachTroubles">Stomach Troubles / Ulcers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_faintingSeizure">
                                <label class="form-check-label" for="e_faintingSeizure">Fainting Seizure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_rapidWeightLoss">
                                <label class="form-check-label" for="e_rapidWeightLoss">Rapid Weight Loss</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_radiationTherapy">
                                <label class="form-check-label" for="e_radiationTherapy">Radiation Therapy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_jointReplacement">
                                <label class="form-check-label" for="e_jointReplacement">Joint Replacement / Implant</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_heartSurgery">
                                <label class="form-check-label" for="e_heartSurgery">Heart Surgery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_heartAttack">
                                <label class="form-check-label" for="e_heartAttack">Heart Attack</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_thyroidProblem">
                                <label class="form-check-label" for="e_thyroidProblem">Thyroid Problem</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_heartDisease">
                                <label class="form-check-label" for="e_heartDisease">Heart Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_heartMurmur">
                                <label class="form-check-label" for="e_heartMurmur">Heart Murmur</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_hepatitisLiverDisease">
                                <label class="form-check-label" for="e_hepatitisLiverDisease">Hepatitis / Liver Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_rheumaticFever">
                                <label class="form-check-label" for="e_rheumaticFever">Rheumatic Fever</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_hayFever">
                                <label class="form-check-label" for="e_hayFever">Hay Fever / Allergies</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_respiratoryProblems">
                                <label class="form-check-label" for="e_respiratoryProblems">Respiratory Problems</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_hepatitisJaundice">
                                <label class="form-check-label" for="e_hepatitisJaundice">Hepatitis / Jaundice</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_tuberculosis">
                                <label class="form-check-label" for="e_tuberculosis">Tuberculosis</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_suddenAnkles">
                                <label class="form-check-label" for="e_suddenAnkles">Swollen Ankles</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_kidneyDisease">
                                <label class="form-check-label" for="e_kidneyDisease">Kidney Disease</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_diabetes">
                                <label class="form-check-label" for="e_diabetes">Diabetes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_chestPain">
                                <label class="form-check-label" for="e_chestPain">Chest Pain</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_stroke">
                                <label class="form-check-label" for="e_stroke">Stroke</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_cancer">
                                <label class="form-check-label" for="e_cancer">Cancer / Tumors</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_anemia">
                                <label class="form-check-label" for="e_anemia">Anemia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_angina">
                                <label class="form-check-label" for="e_angina">Angina</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_asthma">
                                <label class="form-check-label" for="e_asthma">Asthma</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_emphysema">
                                <label class="form-check-label" for="e_emphysema">Emphysema</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_bleedingProblems">
                                <label class="form-check-label" for="e_bleedingProblems">Bleeding Problems</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_bloodDiseases">
                                <label class="form-check-label" for="e_bloodDiseases">Blood Diseases</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_headInjuries">
                                <label class="form-check-label" for="e_headInjuries">Head Injuries</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_arthritisRheumatism">
                                <label class="form-check-label" for="e_arthritisRheumatism">Arthritis / Rheumatism</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="e_hasFollowing[]" type="checkbox" id="e_other">
                                <label class="form-check-label" for="e_other">Other</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Edit</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-target="#viewMedicalHistory" data-bs-toggle="modal">Back</button>
            </div>

        </div>
    </div>