<?php

namespace Database\Seeders;

use App\Models\lab_analys_have_sample;
use App\Models\LabAnalysis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class labAnalysesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labAnalyses = [
            ['lab_analyses_name' => '1 & 25-Dihydroxy Vitamin D', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => '5-HIAA (Quantitative)', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => '17-Hydroxy Progesterone', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => '17-Hydroxycorticosteroids', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => '17-Ketosteroids', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => '17-OH Progesterone neonatal, 170HPRG-Neo.', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => '25-Hydroxy-Vitamin D2, or D3', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ACE, Angiotensin Converting Enzyme', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Acetaminophen', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Acetylcholine receptor antibody', 'global_price' => 100, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ACP, Acid Phosphatase', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ACTH, Adrenocorticotropic Hormone', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Activated Protein C Resistance (APC-R)', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Acyclearnidine, quantitative profile', 'global_price' => 100, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Adenosine Deaminase (ADA)', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ADH, Anti Diuretic Hormone', 'global_price' => 60, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Adrenaline / Epinephrine', 'global_price' => 40, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'AFB Ab (ICT) (Mycobacterium Bacilli)', 'global_price' => 10, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'AFB by PCR, M. Tuberculosis DNA by PCR', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'AFB Culture (Mycobacterium Bacilli)', 'global_price' => 16, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'AFB Culture, Automated (MEGIT Liquid Media)', 'global_price' => 60, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'AFB Smear (Mycobacterium Bacilli)', 'global_price' => 6, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'AFB Susceptibility Test (Mycobacterium Bacilli)', 'global_price' => 40, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'AFP, α Feto Protein', 'global_price' => 16, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'Albumin CSF', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Albumin serum or other fluid except CSF', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Aldolase', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Aldosterone', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Aldosterone 24 hour urine', 'global_price' => 50, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'ALP, Alkaline Phosphatase', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ALP, Bone (Bone-Alkaline Phosphatase)', 'global_price' => 40, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ALT (SGPT)', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Aluminium', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'AMA, Anti Mitochondrial Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'AMA M2 (Anti-Mitochondrial Ab M2)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Amebiasis Serological Test', 'global_price' => 10, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Amikacin', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Amino Acids CSF or urine', 'global_price' => 160, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Amino Acids, (Quantitative) HPLC', 'global_price' => 100, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'AML with t(15,17) PML/RARa by PCR or Fish', 'global_price' => 240, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Ammonia', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Amphetamine Titre', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Amylase', 'global_price' => 7, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Amylase pancreatic', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ANA, Antinuclear Ab', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ANCA (P&C) Anti-Neutrophil Cytoplasmic Ab', 'global_price' => 40, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ANCA-C, Proteinase 3 Ab (PR3)', 'global_price' => 20, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ANCA-P, Myeloperoxidase Ab (Anti - MPO)', 'global_price' => 20, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-Centromere', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-Jo-1', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti - Scl - 70', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti - Sem', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti - UIRNP', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti Mullerian Hormone (AMH)', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-Deamulated Giladin peptides (DGP screen)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-DGP & t-Transglutaminase Abs (tTG/DGP screen)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-Histone Abs', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-insulin Abs', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-platelet antibodies', 'global_price' => 60, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-ribosomal', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Anti-Thrombin III', 'global_price' => 20, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Apolipoprotein - Al', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Apolipoprotein - B', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Arsenic', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ASCA IgA, Saccharomyces Cerevisiae IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ASCA IgG, Saccharomyces Cerevisiae IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'ASLO, Antistreptolysin O (Quantitative)', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'AST (SGOT)', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Bacterial CSF Meningitis Ag Latex Detection of 5 bacteria', 'global_price' => 70, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Bacterial CSF Meningitis Detection by PCR of 5 bacteria', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Bacterial Culture & Susceptibility. manual, Kirby Bauer', 'global_price' => 20, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Bacterial Identification (Automated)', 'global_price' => 40, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Bacterial Smear', 'global_price' => 6, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Bacterial Susceptibility Panel Automated (MIC)', 'global_price' => 40, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Bence-Jones Protein, Qualitative', 'global_price' => 2, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Benzodiazepines Titre', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Bicarbonate HCO3', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Bile acids total', 'global_price' => 40, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Bilharsiosis Serological Test', 'global_price' => 10, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Bilirubin (total & direct & indirect)', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Bilirubin neonatal', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Bleeding & Coagulation Time', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Blood Culture Aerobic Automated', 'global_price' => 100, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Blood Culture Anaerobic Automated', 'global_price' => 100, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Blood Culture Aerobic&Anaerobic Automated', 'global_price' => 200, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Blood Culture manual', 'global_price' => 15, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Blood Film Inspection', 'global_price' => 10, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Blood Gases', 'global_price' => 24, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Blood Group & Rh', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Blood Group & Rh (Gel)', 'global_price' => 8, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Blood Group, Sub-typing, (C-c-E-e-K etc.) Gel Technology', 'global_price' => 25, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Bordetella Pertussis IgG', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Bordetella Pertussis IgM', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Bromide', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Brucella IgG Ab (EIA)', 'global_price' => 24, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Brucella IgM Ab (EIA)', 'global_price' => 24, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Brucella PCR', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'BTA, Bladder Tumour Antigen', 'global_price' => 80, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'B-Trace Protein in CSF', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'C1 Esterase Inhibitor', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'C1q Complement', 'global_price' => 40, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'C3 Complement', 'global_price' => 10, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'C4 Complement', 'global_price' => 10, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'CA 125, Cancer Antigen 125', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'CA 15.3, Cancer Antigen 15.3', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'CA 19.9, Carbohydrate Antigen 19.9', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'CA 72-4', 'global_price' => 32, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'Cadmium', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Calcitonin', 'global_price' => 20, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Calcium', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Calcium, Ionised', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Calprotectin, Qualitative (ICT)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Calprotectin, Quantitative (ELIZA)', 'global_price' => 64, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Calprotectin and lactoferin', 'global_price' => 40, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Cannabinoids (THC) Titre', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Carbamazepine (Tegretol)', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Carbon Dioxide (CO2)', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cardiolipin Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Cardiolipin Ab IgM', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Cardiovascular Disease, CVD 12 Mutation', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Carnitine L', 'global_price' => 40, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Carnitine total and free', 'global_price' => 100, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Catecholamines fractions by HPLC', 'global_price' => 120, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'CBC Body Fluids', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'CBC, Complete Blood Count with platelets Automated', 'global_price' => 10, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'CEA, Carcinoembryonic Antigen', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'Ceruloplasmin', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cervical Smear, Direct Exam', 'global_price' => 3, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'CH 50, total complement', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Chlamydia Ab IgA (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Chlamydia Ab IgG (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Chlamydia Ab IgM (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Chlamydia detection Ab', 'global_price' => 12, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Chloride', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cholesterol', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cholesterol, HDL', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cholesterol, LDL', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cholinesterase', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Chromium', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Chromogranin A', 'global_price' => 60, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'Citrate 24 hours urine', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'CK, Creatine Kinase', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'CK-MB, Creatine Kinase Muscle & Brain', 'global_price' => 12, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Clostridium difficile A&B Toxin in stool', 'global_price' => 32, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'CMV Ab IgG (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'CMV Ab IgM (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'CMV Ab IgG avidity', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'CMV-DNA by PCR (Cytomegalovirus)', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Coagulation Factor II Mutation', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Coagulation Factor V Leiden Mutation', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Coagulation Factor V Mutation', 'global_price' => 140, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Coagulation Factor VII Mutation', 'global_price' => 140, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Coagulation Time (Lee-White)', 'global_price' => 3, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Cobalt', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cocaine Metabolites Titre', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Cold Agglutinins', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Coombs Direct', 'global_price' => 5, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Coombs Indirect', 'global_price' => 6, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Copper', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cortisol serum', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Cortisol free in 24 hour urine', 'global_price' => 20, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Creatinine serum or body fluids', 'global_price' => 6, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Creatinine Clearance', 'global_price' => 12, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Crossmatch (Gel Technology)', 'global_price' => 8, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Crossmatch (Serology)', 'global_price' => 6, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Crossmatch HLA (Lymphocytotoxicity Assay)', 'global_price' => 60, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Crossmatch Tissue (HLA-Cup)', 'global_price' => 120, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'CRP, C-Reactive Protein (Quantitative)', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'CRP-LUS (C-Reactive Protein Latex Ultra Sensitive)', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cryoglobulins (gel)', 'global_price' => 10, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Cryptococcus Antigen', 'global_price' => 40, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Cryptosporidium Ag', 'global_price' => 10, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Crystals Articular fluid', 'global_price' => 8, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Cyclic Citrullinated Peptide Ab (Anti - CCP)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Cyclosporine', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Cyfra 21', 'global_price' => 40, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'Cystatin-C', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Cystic Fibrosis Mutation Screen, CF 36 Mutation', 'global_price' => 300, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Cystine 24 hours urine', 'global_price' => 80, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'D-Dimer', 'global_price' => 24, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Delta 4- Androstene Dione', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Delta Amino Levulenic Acid', 'global_price' => 24, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'DHEA-SO, Dehydroepiandrosterone', 'global_price' => 20, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Diarrhoea multiplex detection By PCR', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Digoxin', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Dihydrotestosterone', 'global_price' => 20, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'DNA, Double-stranded Ab', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Drugs of Abuse screen 10 parameters', 'global_price' => 80, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'EBV Ab IgG, Epstein-Barr Virus (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'EBV Ab IgM, Epstein-Barr Virus (EIA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'EBV-DNA by PCR (Epstein Barr Virus)', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Echinococcus Ab (III)', 'global_price' => 15, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Echinococcus IgG EIA', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Elastase, Pancreatic Elastase in stool', 'global_price' => 40, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin screen neonatal', 'global_price' => 20, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin Variant by HPLC', 'global_price' => 20, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Electrophoresis, Lipids', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins CSF or Fluids', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins Urine', 'global_price' => 50, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Electrophoresis, Serum immunofixation', 'global_price' => 100, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Electrophoresis, Urine immunofixation', 'global_price' => 160, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'ENA-6 Screen Elisa (Extractable Nuclear Antibodies)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Endomysial IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Endomysial IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Entamobahistolytica IgG', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Eosinophils in Sputum or Nasal Discharge', 'global_price' => 2, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Erythropoietin', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'ESR, Erythrocytes Sedimentation Rate', 'global_price' => 3, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Estradiol', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Estriol, Free (Unconjugated)', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Ethanol, Serum', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Factor X', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor II', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor IX', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor V', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor VII', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor VIII', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor VIII antibody inhibitor screen', 'global_price' => 80, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor XI', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor XII coagulation', 'global_price' => 50, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Factor XIII coagulation', 'global_price' => 80, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'FDP, Fibrinogen/Fibrin Degradation Products', 'global_price' => 16, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Ferritin', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Fibrinogen', 'global_price' => 12, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Flowcytometry, immunodeficiency panel', 'global_price' => 140, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Flowcytometry, Leukaemia/Lymphoma immunophenotyping panel bio', 'global_price' => 250, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Flowcytometry, MRD (Minimal Residual Disease)', 'global_price' => 140, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Flowcytometry, platelets immunophenotyping', 'global_price' => 140, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Flowcytometry, PNH (Paroxysmal nocturnal hemoglobinuria)', 'global_price' => 140, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Flowcytometry, T-cell subset quantification including NK', 'global_price' => 140, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'FMF, Familial Mediterranean Fever, 12 Mutation', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Folic Acid', 'global_price' => 24, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Folic acid in RBC', 'global_price' => 48, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Fragility Test for RBC', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Fructosamine', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Fructose-Seminal fluid', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'FSH, Follicle-stimulating IHormone', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Fungal Culture Automated', 'global_price' => 40, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Fungal Culture Manual', 'global_price' => 16, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Fungal Smear', 'global_price' => 6, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'y GT, Gamma-glutamyltransferase', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'G6 PD, Glucose-6-phosphate dehydrogenase', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'G6PD neonatal', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'GAL-1 P-Uridyle Transferase GAIT', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Galactose', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Gastrin', 'global_price' => 32, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Gentamicin', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Giladin Ab IgA', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Giladin Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Glomerular Basement Membrane Ab (Anti GBM)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Glucose', 'global_price' => 2, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Glucose Tolerance Test', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Glutamic Acid Decarboxylase Ab, Anti GAD', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Glycosylated Haemoglobin, HbA1c', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Growth Hormone (GH)', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Ham Test', 'global_price' => 20, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Haptoglobin', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'HAV Ab IgG (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HAV Ab IgM (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HAV Ab total (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBe Ab IgG (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBe Ab IgM (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBe Ab total (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBe Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBe Ag (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBs Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBs Ag (EIA) Quantitative', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HBV, Hepatitis B Virus DNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HCV Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HCV, Hepatitis C Virus RNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HCV Genotyping by PCR', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HDV, Hepatitis D Virus RNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HDV Ab IgM (EIA) Quantitative', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HDV Ab total (EIA) Quantitative', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ab IgA', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ag, Stool', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Helicobacter pylori Breath test', 'global_price' => 80, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Hemochromatosis HFE by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Hemosiderin Blood film or urine', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'HIT Abs PF4, Heparin induced Thrombocytopenia', 'global_price' => 80, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HLA-B5 Typing', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HLA Class I & II Typing (A, B, DR) by PCR', 'global_price' => 320, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HLA Class I Typing (Cw)', 'global_price' => 50, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HLA Class II Typing (DQ)', 'global_price' => 50, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HLA Class II Typing (DR, DQ) Serology', 'global_price' => 120, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HLA-A,B,DR,DQ,DP typing by high resolution assay', 'global_price' => 400, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HLA-B27 Typing', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Home Specimen Collection', 'global_price' => 3, 'discipline' => 'Specimen'],
            ['lab_analyses_name' => 'Homocysteine', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Homocysteine, Quantitative, HPLC, Urine', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'HSV I & II IgG, Herpes Simplex Virus', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HSV I & II IgM, Herpes Simplex Virus', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'HSV DNA by PCR Detection (Herpes Simplex Virus)', 'global_price' => 100, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'HTLV-I & II Ab (Human T-cell Lymphotropic Virus)', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Human Papillome Virus (HPV) by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'IgD,immunoglobulin D', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IgE Profile of more than 30 food allergen quantitative', 'global_price' => 300, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IgE Profile of more than 30 inhalant allergen quantitative', 'global_price' => 300, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IgE screen for 18 food allergen qualitative', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IgE screen for 18 food inhalant qualitative', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IGF bp-3, Insulin-like growth factor 3-binding protein', 'global_price' => 50, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'IGF I, Insulin Like Growth Factor I (Somatomedia C)', 'global_price' => 52, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'IgG Profile of more than 30 food allergen quantitative', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'IgG subclass 1', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'IgG subclass 2', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'IgG subclass 3', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'IgG subclass 4', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Immunoglobulin A, IRA', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Immunoglobulin E, IgE', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Immunoglobulin G, IgG CSF', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Immunoglobulin G, IgG', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Immunoglobulin M, IgM', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Influenza A & B Virus Detection', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Inhibin B', 'global_price' => 52, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Inhibin A pregnancy or Tumour', 'global_price' => 52, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Insulin', 'global_price' => 50, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Intrinsic factor Abs', 'global_price' => 52, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Iron', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Iron saturation (TIBC)', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'IRT neonatal, Immunoreactivity Trypsinogen', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Islet Cell Antibodies, (AICA)', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Jak2-Mutation', 'global_price' => 50, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'JC/BK, Polyoma Virus by PCR', 'global_price' => 50, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Kappa Chain', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Karyotyping', 'global_price' => 50, 'discipline' => 'Cytogenetic'],
            ['lab_analyses_name' => 'Karyotyping amniotic fluid', 'global_price' => 50, 'discipline' => 'Cytogenetic'],
            ['lab_analyses_name' => 'Karyotyping Bone marrow', 'global_price' => 200, 'discipline' => 'Cytogenetic'],
            ['lab_analyses_name' => 'Ketone bodies quantitative', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Lactic Acid (lactate)', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Lambda Chain', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Lamotrigine (Lamictal) HPLC', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'LD, Lactic Dehydrogenase', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'LE Cells, Lupus Erythematosus', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Lead', 'global_price' => 15, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Legionella CFT', 'global_price' => 20, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Leishmania Ab', 'global_price' => 20, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Leishmania detection by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Leishmania Organism Direct examination', 'global_price' => 5, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Leptospira IgM Ab', 'global_price' => 32, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Leucoscreen (Peroxidase test)', 'global_price' => 8, 'discipline' => 'Seminal fluid'],
            ['lab_analyses_name' => 'Leukocytes Alkaline Phosphates, LAP', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'LH, Lutteinizing Hormone', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Lipase', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Lipids, Total', 'global_price' => 3, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Lipoprotein (a), LP little a', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Listeriosis Serological Test', 'global_price' => 16, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Lithium', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Liver Kidney Microsome Ab, Anti LKM I', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Liver cytosol (anti-LCI)', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Lyme Borrellosis IgG', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Lyme Borrellosis IgM', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Magnesium', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Malaria Ab', 'global_price' => 10, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Malaria Organism Direct examination', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Manganese', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Measles IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Measles IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Mercury', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Metanephrine, Urine', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Methaemoglobin', 'global_price' => 10, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Methotrexate', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Microalbuminuria (Quantitative)', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Mononucleosis infectious', 'global_price' => 4, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Mucopolysaccharide, Urine', 'global_price' => 50, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Multiplex-PCR assay for sexual transmitted disease', 'global_price' => 160, 'discipline' => 'M.Biology'],
            ['lab_analyses_name' => 'Mumps IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Mumps IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Mycoplasma Culture', 'global_price' => 32, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Mycoplasma IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Mycoplasma IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Myoglobin', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Myoglobin Quantitative urine', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Natriuretic Peptide, B-Type, BNP', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Natriuretic Peptide, NT-Pro, NT-proBNP', 'global_price' => 50, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Neuron - Specific Enolase, NSE', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Nickel', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Normetanephrine with metanephrine profile by HPLC', 'global_price' => 70, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'OCB+ Transferrin (Occult blood screen in stool)', 'global_price' => 15, 'discipline' => 'Stool'],
            ['lab_analyses_name' => 'Occult Blood (ICT)', 'global_price' => 10, 'discipline' => 'Stool'],
            ['lab_analyses_name' => 'Oligoclonal Bands', 'global_price' => 200, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Opiates Metabolite Titre', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Osmolality', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Osteocalcin', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Ovarian Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Oxalate, Urine (Quantitative)', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'PAP, Prostatic Acid Phosphatase', 'global_price' => 6, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'PAPP-A (pregnaney associated plasma protein-A)', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Parietal Cells Abs', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Peptide C', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'pH stool and body fluid', 'global_price' => 2, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Phenobarbital', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Phenylketonuria PKU Quantitative by HPLC', 'global_price' => 60, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Phenylalanine', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Phenytoin', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Philadelphia Chromosome Analysis, FISH', 'global_price' => 160, 'discipline' => 'Cytogenetic'],
            ['lab_analyses_name' => 'Philadelphia Chromosome by PCR real time.', 'global_price' => 240, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Phospholipid Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Phospholipid Ab IgM', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Phosphorus', 'global_price' => 3, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Platelets Function Test-ADP test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Function Test-ASPI test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Function Test - Collagen test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Function Test - RISTO confirm test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Function Test - RISTO test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Function Test-TRAP test', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Platelets Rich Plasma', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Porphyrin Total in urine', 'global_price' => 32, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Porphyrins profiles in urine', 'global_price' => 200, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Post Coital Test', 'global_price' => 5, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Potassium', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'PRA Identification, HLA Ab Specific Class I', 'global_price' => 240, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'PRA Identification, HLA Ab Specific Class II', 'global_price' => 240, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'PRA screen (Human leukocyte antibody class I & class II)', 'global_price' => 120, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Prealbumine', 'global_price' => 25, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Pregnancy Test', 'global_price' => 5, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Procalcitonin (PCT-Q)', 'global_price' => 40, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Progesterone', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Prolactin', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Protein C Activity', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Protein S Activity', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Protein S Free', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Protein S Total', 'global_price' => 32, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Protein, CSF or Fluids', 'global_price' => 3, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Protein, Total & A/G', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Prothrombin Time', 'global_price' => 8, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Prothrombin Time mix 1:1', 'global_price' => 8, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'PSA, Free Prostatic Specific Antigen', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'PSA, Prostatic Specific Antigen', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'PTH, Parathyroid Hormone', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'PTT-LA (Lupus)', 'global_price' => 16, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'PTT, Partial Thromboplastin Time', 'global_price' => 8, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'PTT, Partial Thromboplastin Time mix 1:1', 'global_price' => 12, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Pyruvate kinase', 'global_price' => 40, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Pyruvic Acid', 'global_price' => 24, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Quantiferon-TB Gold', 'global_price' => 120, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'RA Test, Rheumatoid Arthritis (Qualitative)', 'global_price' => 2.5, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'RA Test, Rheumatoid Arthritis (Quantitative)', 'global_price' => 8, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Rapid streptococcus test', 'global_price' => 10, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'RBC in urine, Haematuria by phase contrast', 'global_price' => 4, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Reducing substance in stool', 'global_price' => 3, 'discipline' => 'Stool'],
            ['lab_analyses_name' => 'Reducing substance in urine', 'global_price' => 3, 'discipline' => 'Stool'],
            ['lab_analyses_name' => 'Renin', 'global_price' => 32, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Reticulocyte Count', 'global_price' => 5, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Rotavirus detection, stool', 'global_price' => 20, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Rubella Ab IgG', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Rubella Ab IgM', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Rubella IgG avidity', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Salicylic Acid', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Selenium', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Seminal Fluid Culture.', 'global_price' => 20, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Serotonin By HPLC', 'global_price' => 80, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Sex Hormone-Binding Globulin (SHBG)', 'global_price' => 32, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Sickle Cells', 'global_price' => 2, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Sirolimus', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'SLA, Soluble Liver Antigen', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Smooth Muscle Ab (ASMA)', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Sodium', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Sperm Ab Total Eliza Blood', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Sperm Activation & Concentration', 'global_price' => 50, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Sperm IgA Ab (MAR)', 'global_price' => 20, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Sperm IgG Ab (MAR)', 'global_price' => 20, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Spermogram (automated examination)', 'global_price' => 12, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Spermogram (manual examination)', 'global_price' => 10, 'discipline' => 'Seminal Fluid'],
            ['lab_analyses_name' => 'Spermogram (seminal morphology)', 'global_price' => 8, 'discipline' => 'Seminal fluid'],
            ['lab_analyses_name' => 'SS-A/Ro Autoantibodies', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'SS-B/La Autoantibodies', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Stain, Exterase', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stain, Periodic Acid (Schiff)', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stain, Peroxidase', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stain, Sudan Black', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stain, Titan Immunofixation.', 'global_price' => 16, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stain, Titan Silver Gel', 'global_price' => 24, 'discipline' => 'Haematology'],
            ['lab_analyses_name' => 'Stone Analysis', 'global_price' => 8, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Stool Analysis', 'global_price' => 5, 'discipline' => 'Stool'],
            ['lab_analyses_name' => 'Stool Culture', 'global_price' => 20, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Sweat Test - Automated', 'global_price' => 80, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Syphilis IgG or IgM, (EIA) or (FTA)', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'T3, Free Trifodothyronine', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'T3, Trifodothyronine', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'T4, Free Thyroxine', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'T4, Thyroxine', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Tacrolimus (Prograf)', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Tandem Mass Spectrometry Metabolic Screen', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Testosterone', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Testosterone, Free', 'global_price' => 20, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Theophylline', 'global_price' => 40, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Thrombin time TT', 'global_price' => 16, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Thyroglobulin', 'global_price' => 20, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Thyroglobulin Ab, Anti TG', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Thyroid Microsomal Ab, TPO', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'TIBC, Total Iron Binding Capacity', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'TNF-alpha, Tumour Necrosis Factor alpha', 'global_price' => 32, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Toxoplasma Antibody IgG Avidity', 'global_price' => 50, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Toxoplasmose Ab total (DA)', 'global_price' => 10, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Toxoplasmose Ab IgG', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Toxoplasmose Ab IgM', 'global_price' => 16, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Toxoplasmosis detection by PCR', 'global_price' => 120, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'TPHA, Treponema Pallidum - IHA', 'global_price' => 10, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Transferrin', 'global_price' => 20, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Transferring saturation (iron + TIBC)', 'global_price' => 12, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Transglutaminase Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Transglutaminase IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Transglutaminase IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Triglycerides', 'global_price' => 5, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Trisonny 21 Analysis, FISH', 'global_price' => 160, 'discipline' => 'Cytogenetic'],
            ['lab_analyses_name' => 'Troponin I or T', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Trypsin Activity (X-Ray Film)', 'global_price' => 5, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'TSH neonatal', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'TSH, Thyroid Stimulating Hormone', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'TSI, TSH Receptors', 'global_price' => 50, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'Tuberculin Skin Test', 'global_price' => 5, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Urate (Uric Acid)', 'global_price' => 4, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Urea', 'global_price' => 4, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Urethral Discharge Smear', 'global_price' => 3, 'discipline' => 'Microbiology'],
            ['lab_analyses_name' => 'Urinalysis', 'global_price' => 4, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Valoproic Acid (Depakene)', 'global_price' => 20, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Vancomycin', 'global_price' => 32, 'discipline' => 'Drug'],
            ['lab_analyses_name' => 'Varicella IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'Varicella IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'VDRL or RPR', 'global_price' => 3, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Virial CSF Meningitis detection By PCR', 'global_price' => 160, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'Vitamin A by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Vitamin B1 by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Vitamin B12', 'global_price' => 24, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Vitamin B6 by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Vitamin E by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'VMA with HVA & SHIAA Profile by HPLC', 'global_price' => 60, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'VMA, Vanillymandelic Acid', 'global_price' => 24, 'discipline' => 'Urine'],
            ['lab_analyses_name' => 'Von Willebrand Factor (vWF)', 'global_price' => 24, 'discipline' => 'Coagulation'],
            ['lab_analyses_name' => 'Widal Test', 'global_price' => 8, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Wright Test after 2-ME IgM', 'global_price' => 8, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Wright Test', 'global_price' => 8, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Xylose, D Dose Charges by gram', 'global_price' => 1, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Xylose, D', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'Yersiniosis Serological Test', 'global_price' => 10, 'discipline' => 'Serology'],
            ['lab_analyses_name' => 'Zinc', 'global_price' => 10, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'α Thalassemia By PCR', 'global_price' => 260, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'α1 Antitrypsin', 'global_price' => 16, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'α2 Macroglobulin', 'global_price' => 24, 'discipline' => 'Chemistry'],
            ['lab_analyses_name' => 'β Crosslaps (β CTX)', 'global_price' => 40, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'β HCG, human Chorionic Gonadotropin', 'global_price' => 16, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'β HCG free (Free Human Chorionic Gonadotropin)', 'global_price' => 24, 'discipline' => 'Hormone'],
            ['lab_analyses_name' => 'β Thalassemia (BTH) by PCR in amniotic fluid', 'global_price' => 280, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'β Thalassemia (BTH) by PCR in blood', 'global_price' => 240, 'discipline' => 'M. Biology'],
            ['lab_analyses_name' => 'β- Glycoprotein IgG', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'β- Glycoprotein IgM', 'global_price' => 32, 'discipline' => 'Immunology'],
            ['lab_analyses_name' => 'β- Microglobulin', 'global_price' => 24, 'discipline' => 'Marker'],
            ['lab_analyses_name' => 'β- Microglobulin urine', 'global_price' => 32, 'discipline' => 'Marker'],
        ];
        $labAnalysesSampleRelations = [
            1 => [10],    // 1 & 25-Dihydroxy Vitamin D => Serum
            2 => [12],    // 5-HIAA (Quantitative) => Urine
            3 => [10],    // 17-Hydroxy Progesterone => Serum
            4 => [12],    // 17-Hydroxycorticosteroids => Urine
            5 => [12],    // 17-Ketosteroids => Urine
            6 => [1, 10], // 17-OH Progesterone neonatal => Blood, Serum
            7 => [10],    // 25-Hydroxy-Vitamin D2, or D3 => Serum
            8 => [10],    // ACE, Angiotensin Converting Enzyme => Serum
            9 => [10],    // Acetaminophen => Serum
            10 => [10],   // Acetylcholine receptor antibody => Serum
            11 => [10],   // ACP, Acid Phosphatase => Serum
            12 => [10],   // ACTH, Adrenocorticotropic Hormone => Serum
            13 => [2],    // Activated Protein C Resistance (APC-R) => Plasma
            14 => [10],   // Acyclearnidine, quantitative profile => Serum
            15 => [3, 4], // Adenosine Deaminase (ADA) => Pleural Fluid, Ascitic Fluid
            16 => [10],   // ADH, Anti Diuretic Hormone => Serum
            17 => [10],   // Adrenaline / Epinephrine => Serum
            18 => [10],   // AFB Ab (ICT) (Mycobacterium Bacilli) => Serum
            19 => [5, 6], // AFB by PCR, M. Tuberculosis DNA by PCR => Sputum, Bronchial wash
            20 => [5, 6], // AFB Culture (Mycobacterium Bacilli) => Sputum, Bronchial wash
            21 => [5, 6], // AFB Culture, Automated (MEGIT Liquid Media) => Sputum, Bronchial wash
            22 => [5, 6], // AFB Smear (Mycobacterium Bacilli) => Sputum, Bronchial wash
            23 => [5, 6], // AFB Susceptibility Test (Mycobacterium Bacilli) => Sputum, Bronchial wash
            24 => [10],   // AFP, α Feto Protein => Serum
            25 => [3],    // Albumin CSF => CSF

            // الصفحة 2 (26-54)
            26 => [10],   // Albumin serum or other fluid except CSF => Serum
            27 => [10],   // Aldolase => Serum
            28 => [10],   // Aldosterone => Serum
            29 => [12],   // Aldosterone 24 hour urine => Urine
            30 => [10],   // ALP, Alkaline Phosphatase => Serum
            31 => [10],   // ALP, Bone (Bone-Alkaline Phosphatase) => Serum
            32 => [10],   // ALT (SGPT) => Serum
            33 => [10],   // Aluminium => Serum
            34 => [10],   // AMA, Anti Mitochondrial Ab => Serum
            35 => [10],   // AMA M2 (Anti-Mitochondrial Ab M2) => Serum
            36 => [10],   // Amebiasis Serological Test => Serum
            37 => [10],   // Amikacin => Serum
            38 => [10, 12], // Amino Acids CSF or urine => Serum, Urine
            39 => [10, 12], // Amino Acids, (Quantitative) HPLC => Serum, Urine
            40 => [1],    // AML with t(15,17) PML/RARa by PCR or Fish => Blood
            41 => [10],   // Ammonia => Serum
            42 => [10],   // Amphetamine Titre => Serum
            43 => [10],   // Amylase => Serum
            44 => [10],   // Amylase pancreatic => Serum
            45 => [10],   // ANA, Antinuclear Ab => Serum
            46 => [10],   // ANCA (P&C) Anti-Neutrophil Cytoplasmic Ab => Serum
            47 => [10],   // ANCA-C, Proteinase 3 Ab (PR3) => Serum
            48 => [10],   // ANCA-P, Myeloperoxidase Ab (Anti - MPO) => Serum
            49 => [10],   // Anti-Centromere => Serum
            50 => [10],   // Anti-Jo-1 => Serum
            51 => [10],   // Anti - Scl - 70 => Serum
            52 => [11],   // Anti - Sem => Semen (Tissue)
            53 => [10],   // Anti - UIRNP => Serum
            54 => [10],   // Anti Mullerian Hormone (AMH) => Serum

            // الصفحة 3 (55-80)
            55 => [10],   // Anti-Deamulated Giladin peptides (DGP screen) => Serum
            56 => [10],   // Anti-DGP & t-Transglutaminase Abs (tTG/DGP screen) => Serum
            57 => [10],   // Anti-Histone Abs => Serum
            58 => [10],   // Anti-insulin Abs => Serum
            59 => [1],    // Anti-platelet antibodies => Blood
            60 => [10],   // Anti-ribosomal => Serum
            61 => [2],    // Anti-Thrombin III => Plasma
            62 => [10],   // Apolipoprotein - Al => Serum
            63 => [10],   // Apolipoprotein - B => Serum
            64 => [10],   // Arsenic => Serum
            65 => [10],   // ASCA IgA, Saccharomyces Cerevisiae IgA Ab => Serum
            66 => [10],   // ASCA IgG, Saccharomyces Cerevisiae IgG Ab => Serum
            67 => [10],   // ASLO, Antistreptolysin O (Quantitative) => Serum
            68 => [10],   // AST (SGOT) => Serum
            69 => [3],    // Bacterial CSF Meningitis Ag Latex Detection of 5 bacteria => CSF
            70 => [3],    // Bacterial CSF Meningitis Detection by PCR of 5 bacteria => CSF
            71 => [7, 8, 9], // Bacterial Culture & Susceptibility. manual, Kirby Bauer => Swab, Pus, Body fluid
            72 => [7, 8, 9], // Bacterial Identification (Automated) => Swab, Pus, Body fluid
            73 => [7, 8, 9], // Bacterial Smear => Swab, Pus, Body fluid
            74 => [7, 8, 9], // Bacterial Susceptibility Panel Automated (MIC) => Swab, Pus, Body fluid
            75 => [12],   // Bence-Jones Protein, Qualitative => Urine
            76 => [10],   // Benzodiazepines Titre => Serum
            77 => [10],   // Bicarbonate HCO3 => Serum
            78 => [10],   // Bile acids total => Serum
            79 => [10],   // Bilharsiosis Serological Test => Serum
            80 => [10],   // Bilirubin (total & direct & indirect) => Serum

            // الصفحة 4 (81-100)
            81 => [10],   // Bilirubin direct => Serum
            82 => [10],   // Bilirubin indirect => Serum
            83 => [10],   // Bilirubin total => Serum
            84 => [1],    // Bleeding time => Blood
            85 => [10],   // Blood Culture => Blood
            86 => [10],   // Blood Film => Blood
            87 => [10],   // Blood Gases (PH, PO2, PCO2, HCO3) => Blood
            88 => [10],   // Blood Group & Rh => Blood
            89 => [10],   // Blood Group ABO => Blood
            90 => [10],   // Blood Group Rh => Blood
            91 => [10],   // Bone Marrow Aspiration => Bone Marrow
            92 => [10],   // Bone Marrow Biopsy => Bone Marrow
            93 => [10],   // Bone Marrow Smear => Bone Marrow
            94 => [10],   // Borrelia Ab (IgG, IgM) => Serum
            95 => [10],   // Brucella Ab (Agglutination) => Serum
            96 => [10],   // BUN (Blood Urea Nitrogen) => Serum
            97 => [10],   // C1 Esterase Inhibitor => Serum
            98 => [10],   // C2 => Serum
            99 => [10],   // C3 => Serum
            100 => [10],  // C4 => Serum

            // الصفحة 5 (101-120)
            101 => [10],  // CA 125 => Serum
            102 => [10],  // CA 15-3 => Serum
            103 => [10],  // CA 19-9 => Serum
            104 => [10],  // Calcitonin => Serum
            105 => [10],  // Calcium => Serum
            106 => [12],  // Calcium 24 hour urine => Urine
            107 => [10],  // Calcium ionized => Serum
            108 => [10],  // Calcium urine => Urine
            109 => [10],  // Campylobacter Ab => Serum
            110 => [10],  // Cancer Ag 72-4 => Serum
            111 => [10],  // Candida Ab => Serum
            112 => [10],  // Canine Leishmaniasis Ab => Serum
            113 => [10],  // Capillary Fragility Test (Rumpel-Leede) => Blood
            114 => [10],  // Capsule Endoscopy => N/A
            115 => [10],  // Carbamazepine => Serum
            116 => [10],  // Carcinoembryonic Ag (CEA) => Serum
            117 => [10],  // Cardiolipin Ab (IgG, IgM) => Serum
            118 => [10],  // Carnitine (Free) => Serum
            119 => [10],  // Carnitine (Total) => Serum
            120 => [10],  // Cat Scratch Disease Ab => Serum

            // الصفحة 6 (121-140)
            121 => [10],  // CBC (Complete Blood Count) => Blood
            122 => [10],  // CD3 => Blood
            123 => [10],  // CD4 => Blood
            124 => [10],  // CD8 => Blood
            125 => [10],  // CD19 => Blood
            126 => [10],  // CD20 => Blood
            127 => [10],  // CD34 => Blood
            128 => [10],  // CD56 => Blood
            129 => [10],  // CEA, Carcinoembryonic Ag => Serum
            130 => [10],  // Ceruloplasmin => Serum
            131 => [10],  // CH50 => Serum
            132 => [10],  // Chikungunya Ab (IgG, IgM) => Serum
            133 => [10],  // Chloride => Serum
            134 => [12],  // Chloride 24 hour urine => Urine
            135 => [10],  // Cholesterol => Serum
            136 => [10],  // Cholesterol HDL => Serum
            137 => [10],  // Cholesterol LDL => Serum
            138 => [10],  // Cholinesterase => Serum
            139 => [10],  // Chromium => Serum
            140 => [10],  // Chromogranin A => Serum

            // الصفحة 7 (141-160)
            141 => [10],  // Chromosome Analysis => Blood
            142 => [10],  // CK (Creatine Kinase) => Serum
            143 => [10],  // CK-MB (Creatine Kinase-MB) => Serum
            144 => [10],  // Clonidine Suppression Test => Serum
            145 => [10],  // Clostridium Difficile Toxin => Stool
            146 => [10],  // Clot Retraction => Blood
            147 => [10],  // CMV Ab (IgG, IgM) => Serum
            148 => [10],  // CMV Ag => Blood
            149 => [10],  // CMV by PCR => Blood
            150 => [10],  // Coagulation Factors => Plasma
            151 => [10],  // Coagulation Screen => Plasma
            152 => [10],  // Cobalt => Serum
            153 => [10],  // Cocaine Titre => Serum
            154 => [10],  // Cold Agglutinins => Serum
            155 => [10],  // Complement C1q => Serum
            156 => [10],  // Complement C3 => Serum
            157 => [10],  // Complement C4 => Serum
            158 => [10],  // Complement CH50 => Serum
            159 => [10],  // Complement Total => Serum
            160 => [10],  // Copper => Serum

            // الصفحة 8 (161-180)
            161 => [10],  // Cortisol => Serum
            162 => [12],  // Cortisol 24 hour urine => Urine
            163 => [10],  // Cortisol AM => Serum
            164 => [10],  // Cortisol PM => Serum
            165 => [10],  // COVID-19 Ab => Serum
            166 => [10],  // COVID-19 Ag => Nasal Swab
            167 => [10],  // COVID-19 PCR => Nasal Swab
            168 => [10],  // C-Peptide => Serum
            169 => [10],  // Creatine Kinase (CK) => Serum
            170 => [10],  // Creatine Kinase Isoenzymes => Serum
            171 => [10],  // Creatine Kinase-MB (CK-MB) => Serum
            172 => [10],  // Creatinine => Serum
            173 => [12],  // Creatinine 24 hour urine => Urine
            174 => [10],  // Creatinine Clearance => Serum, Urine
            175 => [10],  // Creatinine urine => Urine
            176 => [10],  // Cryoglobulins => Serum
            177 => [10],  // CSF Analysis => CSF
            178 => [10],  // CSF Culture => CSF
            179 => [10],  // CSF Glucose => CSF
            180 => [10],  // CSF Protein => CSF

            // الصفحة 9 (181-200)
            181 => [10],  // CSF Routine => CSF
            182 => [10],  // CSF VDRL => CSF
            183 => [10],  // CT scan => N/A
            184 => [10],  // Culture & Susceptibility => Various
            185 => [10],  // Cyclic Citrullinated Peptide Ab (Anti-CCP) => Serum
            186 => [10],  // Cyclosporine => Serum
            187 => [10],  // Cysticercus Ab => Serum
            188 => [10],  // Cytology => Various
            189 => [10],  // Cytomegalovirus (CMV) Ab => Serum
            190 => [10],  // D-Dimer => Plasma
            191 => [10],  // Dengue Ab (IgG, IgM) => Serum
            192 => [10],  // Dengue Ag NS1 => Serum
            193 => [10],  // Dexamethasone Suppression Test => Serum
            194 => [10],  // DHEA-S => Serum
            195 => [10],  // Digoxin => Serum
            196 => [10],  // Dihydrotestosterone => Serum
            197 => [10],  // DNA Extraction => Blood
            198 => [10],  // DNA Fragmentation => Semen
            199 => [10],  // DNA Paternity Test => Blood
            200 => [10],  // Donath-Landsteiner Ab => Serum

            // الصفحة 10 (201-220)
            201 => [10],  // Dopamine => Serum
            202 => [10],  // Double Strand DNA Ab (Anti-dsDNA) => Serum
            203 => [10],  // Drug Screen => Urine
            204 => [10],  // EBV Ab (IgG, IgM) => Serum
            205 => [10],  // EBV Early Ag => Serum
            206 => [10],  // EBV Nuclear Ag => Serum
            207 => [10],  // EBV Viral Capsid Ag (VCA) => Serum
            208 => [10],  // Echo => N/A
            209 => [10],  // EGD => N/A
            210 => [10],  // Electrolytes => Serum
            211 => [10],  // Electrophoresis => Serum
            212 => [10],  // Endomysial Ab => Serum
            213 => [10],  // Endoscopy => N/A
            214 => [10],  // Eosinophil Count => Blood
            215 => [10],  // Epinephrine => Serum
            216 => [10],  // Epstein-Barr Virus (EBV) Ab => Serum
            217 => [10],  // Erythrocyte Sedimentation Rate (ESR) => Blood
            218 => [10],  // Estradiol => Serum
            219 => [10],  // Estrogen => Serum
            220 => [10],  // Ethanol => Serum

            // الصفحة 11 (221-240)
            221 => [10],  // Factor V Leiden => Plasma
            222 => [10],  // Factor VIII => Plasma
            223 => [10],  // Fasting Blood Sugar (FBS) => Serum
            224 => [10],  // Fat Stain => Stool
            225 => [10],  // Fatty Acid Binding Protein => Serum
            226 => [10],  // Ferritin => Serum
            227 => [10],  // Fetal Fibronectin => Vaginal Swab
            228 => [10],  // Fibrin Degradation Products => Plasma
            229 => [10],  // Fibrinogen => Plasma
            230 => [10],  // Flow Cytometry => Blood
            231 => [10],  // Fluorescent Treponemal Ab => Serum
            232 => [10],  // Folate => Serum
            233 => [10],  // Folate RBC => Blood
            234 => [10],  // Follicle Stimulating Hormone (FSH) => Serum
            235 => [10],  // Free Kappa Light Chains => Serum
            236 => [10],  // Free Lambda Light Chains => Serum
            237 => [10],  // Free Light Chains => Serum
            238 => [10],  // Free T3 => Serum
            239 => [10],  // Free T4 => Serum
            240 => [10],  // Free Testosterone => Serum

            // الصفحة 12 (241-260)
            241 => [10],  // FSH (Follicle Stimulating Hormone) => Serum
            242 => [10],  // Fungal Culture => Various
            243 => [10],  // Fungal Smear => Various
            244 => [10],  // Furosemide Test => Serum
            245 => [10],  // Galactomannan => Serum
            246 => [10],  // Gastrin => Serum
            247 => [10],  // Gentamicin => Serum
            248 => [10],  // Giardia Ag => Stool
            249 => [10],  // Globulin => Serum
            250 => [10],  // Glomerular Basement Membrane Ab => Serum
            251 => [10],  // Glucagon => Serum
            252 => [10],  // Glucose => Serum
            253 => [12],  // Glucose 24 hour urine => Urine
            254 => [10],  // Glucose Challenge Test => Serum
            255 => [10],  // Glucose Tolerance Test => Serum
            256 => [10],  // Glucose urine => Urine
            257 => [10],  // Glutamic Acid Decarboxylase Ab (Anti-GAD) => Serum
            258 => [10],  // Glycated Albumin => Serum
            259 => [10],  // Glycohemoglobin (HbA1c) => Blood
            260 => [10],  // Gonorrhea Culture => Swab

            // الصفحة 13 (261-280)
            261 => [10],  // Gonorrhea PCR => Urine
            262 => [10],  // Growth Hormone => Serum
            263 => [10],  // H. pylori Ab => Serum
            264 => [10],  // H. pylori Ag => Stool
            265 => [10],  // H. pylori Culture => Biopsy
            266 => [10],  // H. pylori PCR => Biopsy
            267 => [10],  // Haptoglobin => Serum
            268 => [10],  // Hb Electrophoresis => Blood
            269 => [10],  // HbA1c (Glycohemoglobin) => Blood
            270 => [10],  // HBeAg => Serum
            271 => [10],  // HBsAb => Serum
            272 => [10],  // HBsAg => Serum
            273 => [10],  // HBV DNA => Serum
            274 => [10],  // HBV Genotyping => Serum
            275 => [10],  // HCV Ab => Serum
            276 => [10],  // HCV Genotyping => Serum
            277 => [10],  // HCV RNA => Serum
            278 => [10],  // HDL Cholesterol => Serum
            279 => [10],  // Heavy Metal Screen => Urine
            280 => [10],  // Helicobacter pylori Ab => Serum

            // الصفحة 14 (281-300)
            281 => [10],  // Hematocrit => Blood
            282 => [10],  // Hemoglobin => Blood
            283 => [10],  // Hemoglobin A2 => Blood
            284 => [10],  // Hemoglobin Electrophoresis => Blood
            285 => [10],  // Hemoglobin F => Blood
            286 => [10],  // Heparin Induced Thrombocytopenia Ab => Plasma
            287 => [10],  // Hepatitis A Ab => Serum
            288 => [10],  // Hepatitis B Core Ab => Serum
            289 => [10],  // Hepatitis B Core IgM => Serum
            290 => [10],  // Hepatitis B Surface Ab => Serum
            291 => [10],  // Hepatitis B Surface Ag => Serum
            292 => [10],  // Hepatitis Be Ab => Serum
            293 => [10],  // Hepatitis Be Ag => Serum
            294 => [10],  // Hepatitis C Ab => Serum
            295 => [10],  // Hepatitis D Ab => Serum
            296 => [10],  // Hepatitis E Ab => Serum
            297 => [10],  // HER2/neu => Serum
            298 => [10],  // Herpes Simplex Virus (HSV) Ab => Serum
            299 => [10],  // Herpes Simplex Virus (HSV) PCR => Swab
            300 => [10],  // Histamine => Serum

            // الصفحة 15 (301-320)
            301 => [10],  // Histone Ab => Serum
            302 => [10],  // HIV Ab => Serum
            303 => [10],  // HIV Ag/Ab Combo => Serum
            304 => [10],  // HIV PCR => Blood
            305 => [10],  // HIV Viral Load => Plasma
            306 => [10],  // HLA B27 => Blood
            307 => [10],  // HLA Typing => Blood
            308 => [10],  // Homocysteine => Serum
            309 => [10],  // HPV DNA => Swab
            310 => [10],  // HPV Genotyping => Swab
            311 => [10],  // HSV 1 Ab => Serum
            312 => [10],  // HSV 2 Ab => Serum
            313 => [10],  // HSV Culture => Swab
            314 => [10],  // HSV PCR => Swab
            315 => [10],  // Human Chorionic Gonadotropin (hCG) => Serum
            316 => [10],  // Human Growth Hormone (HGH) => Serum
            317 => [10],  // Human Papillomavirus (HPV) DNA => Swab
            318 => [10],  // Hydroxyproline => Urine
            319 => [10],  // IgE => Serum
            320 => [10],  // IgG => Serum

            // الصفحة 16 (321-340)
            321 => [10],  // IgG Subclasses => Serum
            322 => [10],  // IgM => Serum
            323 => [10],  // Immunofixation => Serum
            324 => [10],  // Immunoglobulins => Serum
            325 => [10],  // Insulin => Serum
            326 => [10],  // Insulin Antibodies => Serum
            327 => [10],  // Insulin Like Growth Factor 1 (IGF-1) => Serum
            328 => [10],  // Insulin Like Growth Factor Binding Protein 3 (IGFBP-3) => Serum
            329 => [10],  // Iron => Serum
            330 => [10],  // Iron Binding Capacity => Serum
            331 => [10],  // Iron Saturation => Serum
            332 => [10],  // Iron TIBC => Serum
            333 => [10],  // Kappa Light Chains => Serum
            334 => [10],  // Ketones => Urine
            335 => [10],  // Lactate => Blood
            336 => [10],  // Lactate Dehydrogenase (LDH) => Serum
            337 => [10],  // Lactose Tolerance Test => Serum
            338 => [10],  // Lambda Light Chains => Serum
            339 => [10],  // Lead => Blood
            340 => [10],  // Legionella Ab => Serum

            // الصفحة 17 (341-360)
            341 => [10],  // Leptin => Serum
            342 => [10],  // Leucine Aminopeptidase => Serum
            343 => [10],  // Leukocyte Alkaline Phosphatase => Blood
            344 => [10],  // Lipase => Serum
            345 => [10],  // Lipid Profile => Serum
            346 => [10],  // Lipoprotein (a) => Serum
            347 => [10],  // Lithium => Serum
            348 => [10],  // Liver Kidney Microsomal Ab (Anti-LKM) => Serum
            349 => [10],  // LKM-1 Ab => Serum
            350 => [10],  // Lp(a) => Serum
            351 => [10],  // Lupus Anticoagulant => Plasma
            352 => [10],  // Lyme Disease Ab => Serum
            353 => [10],  // Lymphocyte Subset Panel => Blood
            354 => [10],  // Magnesium => Serum
            355 => [12],  // Magnesium 24 hour urine => Urine
            356 => [10],  // Malaria Smear => Blood
            357 => [10],  // Measles Ab => Serum
            358 => [10],  // Mercury => Blood
            359 => [10],  // Metanephrines => Urine
            360 => [10],  // Methotrexate => Serum

            // الصفحة 18 (361-380)
            361 => [10],  // Methylmalonic Acid => Serum
            362 => [10],  // Microalbumin => Urine
            363 => [10],  // Microfilaria => Blood
            364 => [10],  // Mononucleosis Test => Serum
            365 => [10],  // MRI => N/A
            366 => [10],  // Mumps Ab => Serum
            367 => [10],  // Myasthenia Gravis Ab => Serum
            368 => [10],  // Mycoplasma Ab => Serum
            369 => [10],  // Myeloperoxidase Ab (MPO) => Serum
            370 => [10],  // Myoglobin => Serum
            371 => [10],  // N Terminal Pro BNP (NT-proBNP) => Serum
            372 => [10],  // Neonatal Bilirubin => Serum
            373 => [10],  // Neuron Specific Enolase (NSE) => Serum
            374 => [10],  // Neutrophil Function => Blood
            375 => [10],  // NMP22 => Urine
            376 => [10],  // Norepinephrine => Serum
            377 => [10],  // Norovirus Ag => Stool
            378 => [10],  // Nucleosome Ab => Serum
            379 => [10],  // Occult Blood => Stool
            380 => [10],  // O&P (Ova and Parasites) => Stool

            // الصفحة 19 (381-400)
            381 => [10],  // Osmolality => Serum
            382 => [12],  // Osmolality urine => Urine
            383 => [10],  // Osteocalcin => Serum
            384 => [10],  // P53 Ab => Serum
            385 => [10],  // P-ANCA => Serum
            386 => [10],  // Pancreatic Elastase => Stool
            387 => [10],  // Paracetamol => Serum
            388 => [10],  // Parathyroid Hormone (PTH) => Serum
            389 => [10],  // Parvovirus B19 Ab => Serum
            390 => [10],  // Parvovirus B19 DNA => Blood
            391 => [10],  // Pax-2 Ab => Serum
            392 => [10],  // PCT (Procalcitonin) => Serum
            393 => [10],  // PDGF => Serum
            394 => [10],  // Phenobarbital => Serum
            395 => [10],  // Phenytoin => Serum
            396 => [10],  // Phosphatase Acid => Serum
            397 => [10],  // Phosphatase Alkaline => Serum
            398 => [10],  // Phosphorus => Serum
            399 => [12],  // Phosphorus 24 hour urine => Urine
            400 => [10],  // Plasminogen Activator Inhibitor 1 (PAI-1) => Plasma

            // الصفحة 20 (401-420)
            401 => [10],  // Platelet Aggregation => Plasma
            402 => [10],  // Platelet Antibodies => Plasma
            403 => [10],  // Platelet Count => Blood
            404 => [10],  // Platelet Function Analysis (PFA) => Blood
            405 => [10],  // PML-RARA => Blood
            406 => [10],  // Pneumococcal Ab => Serum
            407 => [10],  // Potassium => Serum
            408 => [12],  // Potassium 24 hour urine => Urine
            409 => [10],  // Prealbumin => Serum
            410 => [10],  // Pregnancy Associated Plasma Protein A (PAPP-A) => Serum
            411 => [10],  // Pregnenolone => Serum
            412 => [10],  // Progesterone => Serum
            413 => [10],  // Prolactin => Serum
            414 => [10],  // Prolactin Inhibitory Factor => Serum
            415 => [10],  // Prostate Specific Ag (PSA) => Serum
            416 => [10],  // Protein C => Plasma
            417 => [10],  // Protein Electrophoresis => Serum
            418 => [10],  // Protein S => Plasma
            419 => [10],  // Proteinuria 24 hour => Urine
            420 => [10],  // Prothrombin Gene Mutation => Plasma

            // الصفحة 21 (421-440)
            421 => [10],  // Prothrombin Time (PT) => Plasma
            422 => [10],  // PSA Free => Serum
            423 => [10],  // PSA Total => Serum
            424 => [10],  // PTH (Parathyroid Hormone) => Serum
            425 => [10],  // PTHrP => Serum
            426 => [10],  // Pyridinoline => Urine
            427 => [10],  // QuantiFERON-TB Gold => Blood
            428 => [10],  // RA Latex => Serum
            429 => [10],  // RAST => Serum
            430 => [10],  // RBC Folate => Blood
            431 => [10],  // Red Blood Cell Count => Blood
            432 => [10],  // Red Cell Distribution Width (RDW) => Blood
            433 => [10],  // Renal Biopsy => Tissue
            434 => [10],  // Renin => Plasma
            435 => [10],  // Respiratory Syncytial Virus (RSV) Ag => Nasal Swab
            436 => [10],  // Reticulocyte Count => Blood
            437 => [10],  // Rheumatoid Factor => Serum
            438 => [10],  // Rotavirus Ag => Stool
            439 => [10],  // Rubella Ab => Serum
            440 => [10],  // Salicylate => Serum

            // الصفحة 22 (441-460)
            441 => [10],  // SARS-CoV-2 Ab => Serum
            442 => [10],  // SARS-CoV-2 Ag => Nasal Swab
            443 => [10],  // SARS-CoV-2 PCR => Nasal Swab
            444 => [10],  // Scleroderma Ab => Serum
            445 => [10],  // Semen Analysis => Semen
            446 => [10],  // Serotonin => Serum
            447 => [10],  // Serum Free Light Chains => Serum
            448 => [10],  // Sex Hormone Binding Globulin (SHBG) => Serum
            449 => [10],  // Sickle Cell Screen => Blood
            450 => [10],  // Smooth Muscle Ab => Serum
            451 => [10],  // Sodium => Serum
            452 => [12],  // Sodium 24 hour urine => Urine
            453 => [10],  // Somatomedin C => Serum
            454 => [10],  // Sperm DNA Fragmentation => Semen
            455 => [10],  // Sperm Penetration Assay => Semen
            456 => [10],  // Sputum AFB => Sputum
            457 => [10],  // Sputum Culture => Sputum
            458 => [10],  // Sputum Cytology => Sputum
            459 => [10],  // Sputum Gram Stain => Sputum
            460 => [10],  // SS-A (Ro) Ab => Serum

            // الصفحة 23 (461-480)
            461 => [10],  // SS-B (La) Ab => Serum
            462 => [10],  // Stool Culture => Stool
            463 => [10],  // Stool Occult Blood => Stool
            464 => [10],  // Stool Ova and Parasites => Stool
            465 => [10],  // Stool Reducing Substances => Stool
            466 => [10],  // Streptozyme => Serum
            467 => [10],  // Sulfasalazine => Serum
            468 => [10],  // Sweat Chloride => Sweat
            469 => [10],  // Synovial Fluid Analysis => Synovial Fluid
            470 => [10],  // Syphilis IgG => Serum
            471 => [10],  // Syphilis IgM => Serum
            472 => [10],  // Syphilis RPR => Serum
            473 => [10],  // Syphilis TPHA => Serum
            474 => [10],  // T3 => Serum
            475 => [10],  // T3 Free => Serum
            476 => [10],  // T3 Reverse => Serum
            477 => [10],  // T3 Total => Serum
            478 => [10],  // T4 => Serum
            479 => [10],  // T4 Free => Serum
            480 => [10],  // T4 Total => Serum

            // الصفحة 24 (481-500)
            481 => [10],  // Tacrolimus => Blood
            482 => [10],  // Tartrate Resistant Acid Phosphatase (TRAP) => Serum
            483 => [10],  // TCO2 => Serum
            484 => [10],  // Testosterone => Serum
            485 => [10],  // Testosterone Free => Serum
            486 => [10],  // Testosterone Total => Serum
            487 => [10],  // Theophylline => Serum
            488 => [10],  // Thrombin Time => Plasma
            489 => [10],  // Thyroid Peroxidase Ab (Anti-TPO) => Serum
            490 => [10],  // Thyroid Stimulating Hormone (TSH) => Serum
            491 => [10],  // Thyroglobulin => Serum
            492 => [10],  // Thyroglobulin Ab => Serum
            493 => [10],  // Thyroxine (T4) => Serum
            494 => [10],  // TIBC => Serum
            495 => [10],  // Tissue Transglutaminase Ab (tTG) => Serum
            496 => [10],  // Tocopherol (Vitamin E) => Serum
            497 => [10],  // Total IgE => Serum
            498 => [10],  // Total Protein => Serum
            499 => [10],  // Toxoplasma Ab (IgG, IgM) => Serum
            500 => [10],  // Transferrin => Serum

            // الصفحة 25 (501-520)
            501 => [10],  // Transferrin Saturation => Serum
            502 => [10],  // Triglycerides => Serum
            503 => [10],  // Triiodothyronine (T3) => Serum
            504 => [10],  // Troponin I => Serum
            505 => [10],  // Troponin T => Serum
            506 => [10],  // Trypanosoma Ab => Serum
            507 => [10],  // TSH (Thyroid Stimulating Hormone) => Serum
            508 => [10],  // TSH Receptor Ab => Serum
            509 => [10],  // T-SPOT.TB => Blood
            510 => [10],  // Tumor Necrosis Factor => Serum
            511 => [10],  // Urea => Serum
            512 => [12],  // Urea 24 hour urine => Urine
            513 => [10],  // Urea Breath Test => Breath
            514 => [10],  // Urea Nitrogen => Serum
            515 => [10],  // Uric Acid => Serum
            516 => [12],  // Uric Acid 24 hour urine => Urine
            517 => [10],  // Urinalysis => Urine
            518 => [10],  // Urine Culture => Urine
            519 => [10],  // Urine Protein Electrophoresis => Urine
            520 => [10],  // Urobilinogen => Urine

            // الصفحة 26 (521-540)
            521 => [10],  // Vancomycin => Serum
            522 => [10],  // Varicella Zoster Ab => Serum
            523 => [10],  // Vasoactive Intestinal Peptide (VIP) => Serum
            524 => [10],  // VDRL => Serum
            525 => [10],  // Very Long Chain Fatty Acids => Serum
            526 => [10],  // Viral Culture => Various
            527 => [10],  // Viral Load => Plasma
            528 => [10],  // Vitamin A => Serum
            529 => [10],  // Vitamin B1 => Serum
            530 => [10],  // Vitamin B12 => Serum
            531 => [10],  // Vitamin B6 => Serum
            532 => [10],  // Vitamin C => Serum
            533 => [10],  // Vitamin D => Serum
            534 => [10],  // Vitamin E => Serum
            535 => [10],  // Vitamin K => Serum
            536 => [10],  // von Willebrand Factor => Plasma
            537 => [10],  // VWF Activity => Plasma
            538 => [10],  // VWF Antigen => Plasma
            539 => [10],  // Warfarin Sensitivity => Plasma
            540 => [10],  // West Nile Virus Ab => Serum

            // الصفحة 27 (541-546)
            541 => [10],  // White Blood Cell Count => Blood
            542 => [10],  // White Blood Cell Differential => Blood
            543 => [10],  // Zinc => Serum
            544 => [10],  // β- Microglobulin => Serum
            545 => [12],  // β- Microglobulin urine => Urine
            546 => [10],  // β-hCG => Serum
        ];
        foreach ($labAnalyses as $labAnalys) {
            LabAnalysis::create($labAnalys);
        }
        foreach ($labAnalysesSampleRelations as $labAnalysesId => $sampleIds) {
            foreach ($sampleIds as $sampleId) {
                $temp = [
                    'lab_analys_id' => $labAnalysesId,
                    'sample_id' => $sampleId,
                ];
                lab_analys_have_sample::create($temp);
            }
        }
    }
}
