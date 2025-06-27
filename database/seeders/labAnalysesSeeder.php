<?php

namespace Database\Seeders;

use App\Models\lab_analys_have_sample;
use App\Models\LabAnalysis;
use App\Models\Range;
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
        $ranges =  [
            // 1. فيتامين د (25-Hydroxy Vitamin D)
            [
                'lab_analys_id' => 1,
                'newborns_min' => 7,
                'newborns_max' => 30,
                'children_min' => 20,
                'children_max' => 50,
                'adults_min' => 30,
                'adults_max' => 100,
                'women_min' => 30,
                'women_max' => 100,
                'men_min' => 30,
                'men_max' => 100,
                'unit' => 'ng/mL'
            ],

            // 2. هرمون 17-Hydroxy Progesterone
            [
                'lab_analys_id' => 2,
                'newborns_min' => 0,
                'newborns_max' => 5,
                'children_min' => 0.2,
                'children_max' => 1.2,
                'adults_min' => 0.2,
                'adults_max' => 2.3,
                'women_min' => 0.2,
                'women_max' => 4.5,
                'men_min' => 0.2,
                'men_max' => 2.3,
                'unit' => 'ng/mL'
            ],

            // 3. هرمون ACTH
            [
                'lab_analys_id' => 3,
                'newborns_min' => 6,
                'newborns_max' => 76,
                'children_min' => 7,
                'children_max' => 63,
                'adults_min' => 6,
                'adults_max' => 76,
                'women_min' => 6,
                'women_max' => 76,
                'men_min' => 6,
                'men_max' => 76,
                'unit' => 'pg/mL'
            ],

            // 4. بروتين AFP
            [
                'lab_analys_id' => 4,
                'newborns_min' => 0,
                'newborns_max' => 100,
                'children_min' => 0,
                'children_max' => 10,
                'adults_min' => 0,
                'adults_max' => 10,
                'women_min' => 0,
                'women_max' => 250,
                'men_min' => 0,
                'men_max' => 10,
                'unit' => 'ng/mL'
            ],

            // 5. الألبومين (Albumin)
            [
                'lab_analys_id' => 5,
                'newborns_min' => 2.8,
                'newborns_max' => 4.4,
                'children_min' => 3.4,
                'children_max' => 4.2,
                'adults_min' => 3.5,
                'adults_max' => 5.0,
                'women_min' => 3.5,
                'women_max' => 5.0,
                'men_min' => 3.5,
                'men_max' => 5.0,
                'unit' => 'g/dL'
            ],

            // 6. الألدوستيرون (Aldosterone)
            [
                'lab_analys_id' => 6,
                'newborns_min' => 5,
                'newborns_max' => 100,
                'children_min' => 5,
                'children_max' => 60,
                'adults_min' => 5,
                'adults_max' => 30,
                'women_min' => 5,
                'women_max' => 30,
                'men_min' => 5,
                'men_max' => 30,
                'unit' => 'ng/dL'
            ],

            // 7. الفوسفاتاز القلوي (ALP)
            [
                'lab_analys_id' => 7,
                'newborns_min' => 50,
                'newborns_max' => 200,
                'children_min' => 100,
                'children_max' => 350,
                'adults_min' => 30,
                'adults_max' => 120,
                'women_min' => 30,
                'women_max' => 120,
                'men_min' => 30,
                'men_max' => 120,
                'unit' => 'U/L'
            ],

            // 8. إنزيم ALT
            [
                'lab_analys_id' => 8,
                'newborns_min' => 7,
                'newborns_max' => 55,
                'children_min' => 7,
                'children_max' => 45,
                'adults_min' => 7,
                'adults_max' => 55,
                'women_min' => 7,
                'women_max' => 45,
                'men_min' => 7,
                'men_max' => 55,
                'unit' => 'U/L'
            ],

            // 9. هرمون AMH
            [
                'lab_analys_id' => 9,
                'newborns_min' => 0,
                'newborns_max' => 0.1,
                'children_min' => 0,
                'children_max' => 0.1,
                'adults_min' => 1.0,
                'adults_max' => 10.0,
                'women_min' => 1.0,
                'women_max' => 10.0,
                'men_min' => 1.0,
                'men_max' => 10.0,
                'unit' => 'ng/mL'
            ],

            // 10. الأميليز (Amylase)
            [
                'lab_analys_id' => 10,
                'newborns_min' => 5,
                'newborns_max' => 65,
                'children_min' => 10,
                'children_max' => 100,
                'adults_min' => 30,
                'adults_max' => 110,
                'women_min' => 30,
                'women_max' => 110,
                'men_min' => 30,
                'men_max' => 110,
                'unit' => 'U/L'
            ],

            // 11. الأنسولين (Insulin)
            [
                'lab_analys_id' => 11,
                'newborns_min' => 2,
                'newborns_max' => 20,
                'children_min' => 2,
                'children_max' => 20,
                'adults_min' => 2,
                'adults_max' => 25,
                'women_min' => 2,
                'women_max' => 25,
                'men_min' => 2,
                'men_max' => 25,
                'unit' => 'μIU/mL'
            ],

            // 12. الحديد (Iron)
            [
                'lab_analys_id' => 12,
                'newborns_min' => 50,
                'newborns_max' => 180,
                'children_min' => 30,
                'children_max' => 120,
                'adults_min' => 50,
                'adults_max' => 170,
                'women_min' => 40,
                'women_max' => 150,
                'men_min' => 50,
                'men_max' => 170,
                'unit' => 'μg/dL'
            ],

            // 13. البرولاكتين (Prolactin)
            [
                'lab_analys_id' => 13,
                'newborns_min' => 5,
                'newborns_max' => 25,
                'children_min' => 5,
                'children_max' => 20,
                'adults_min' => 5,
                'adults_max' => 25,
                'women_min' => 5,
                'women_max' => 40,
                'men_min' => 5,
                'men_max' => 20,
                'unit' => 'ng/mL'
            ],

            // 14. التستوستيرون (Testosterone)
            [
                'lab_analys_id' => 14,
                'newborns_min' => 270,
                'newborns_max' => 1070,
                'children_min' => 0,
                'children_max' => 20,
                'adults_min' => 270,
                'adults_max' => 1070,
                'women_min' => 15,
                'women_max' => 70,
                'men_min' => 270,
                'men_max' => 1070,
                'unit' => 'ng/dL'
            ],

            // 15. هرمون TSH
            [
                'lab_analys_id' => 15,
                'newborns_min' => 1,
                'newborns_max' => 39,
                'children_min' => 0.7,
                'children_max' => 6.4,
                'adults_min' => 0.4,
                'adults_max' => 4.0,
                'women_min' => 0.4,
                'women_max' => 4.0,
                'men_min' => 0.4,
                'men_max' => 4.0,
                'unit' => 'mIU/L'
            ],

            // 16. الكالسيوم (Calcium)
            [
                'lab_analys_id' => 16,
                'newborns_min' => 8.0,
                'newborns_max' => 11.0,
                'children_min' => 8.8,
                'children_max' => 10.8,
                'adults_min' => 8.6,
                'adults_max' => 10.2,
                'women_min' => 8.6,
                'women_max' => 10.2,
                'men_min' => 8.6,
                'men_max' => 10.2,
                'unit' => 'mg/dL'
            ],

            // 17. الكوليسترول (Cholesterol)
            [
                'lab_analys_id' => 17,
                'newborns_min' => 50,
                'newborns_max' => 150,
                'children_min' => 120,
                'children_max' => 200,
                'adults_min' => 120,
                'adults_max' => 200,
                'women_min' => 120,
                'women_max' => 200,
                'men_min' => 120,
                'men_max' => 200,
                'unit' => 'mg/dL'
            ],

            // 18. الكرياتينين (Creatinine)
            [
                'lab_analys_id' => 18,
                'newborns_min' => 0.2,
                'newborns_max' => 1.2,
                'children_min' => 0.3,
                'children_max' => 1.0,
                'adults_min' => 0.5,
                'adults_max' => 1.2,
                'women_min' => 0.5,
                'women_max' => 1.1,
                'men_min' => 0.7,
                'men_max' => 1.3,
                'unit' => 'mg/dL'
            ],

            // 19. CRP
            [
                'lab_analys_id' => 19,
                'newborns_min' => 0,
                'newborns_max' => 1.0,
                'children_min' => 0,
                'children_max' => 1.0,
                'adults_min' => 0,
                'adults_max' => 1.0,
                'women_min' => 0,
                'women_max' => 1.0,
                'men_min' => 0,
                'men_max' => 1.0,
                'unit' => 'mg/dL'
            ],

            // 20. D-Dimer
            [
                'lab_analys_id' => 20,
                'newborns_min' => 0,
                'newborns_max' => 0.5,
                'children_min' => 0,
                'children_max' => 0.5,
                'adults_min' => 0,
                'adults_max' => 0.5,
                'women_min' => 0,
                'women_max' => 0.5,
                'men_min' => 0,
                'men_max' => 0.5,
                'unit' => 'μg/mL'
            ],

            // 21. الإستروجين (Estradiol)
            [
                'lab_analys_id' => 21,
                'newborns_min' => 0,
                'newborns_max' => 20,
                'children_min' => 0,
                'children_max' => 20,
                'adults_min' => 10,
                'adults_max' => 400,
                'women_min' => 10,
                'women_max' => 400,
                'men_min' => 10,
                'men_max' => 50,
                'unit' => 'pg/mL'
            ],

            // 22. الفيريتين (Ferritin)
            [
                'lab_analys_id' => 22,
                'newborns_min' => 25,
                'newborns_max' => 200,
                'children_min' => 7,
                'children_max' => 140,
                'adults_min' => 12,
                'adults_max' => 300,
                'women_min' => 10,
                'women_max' => 150,
                'men_min' => 20,
                'men_max' => 300,
                'unit' => 'ng/mL'
            ],

            // 23. حمض الفوليك (Folic Aclab_analys_id)
            [
                'lab_analys_id' => 23,
                'newborns_min' => 2,
                'newborns_max' => 20,
                'children_min' => 3,
                'children_max' => 20,
                'adults_min' => 3,
                'adults_max' => 20,
                'women_min' => 3,
                'women_max' => 20,
                'men_min' => 3,
                'men_max' => 20,
                'unit' => 'ng/mL'
            ],

            // 24. FSH
            [
                'lab_analys_id' => 24,
                'newborns_min' => 0.1,
                'newborns_max' => 3.0,
                'children_min' => 0.1,
                'children_max' => 3.0,
                'adults_min' => 1.0,
                'adults_max' => 12.0,
                'women_min' => 1.0,
                'women_max' => 30.0,
                'men_min' => 1.0,
                'men_max' => 12.0,
                'unit' => 'mIU/mL'
            ],

            // 25. الجلوكوز (Glucose)
            [
                'lab_analys_id' => 25,
                'newborns_min' => 40,
                'newborns_max' => 100,
                'children_min' => 70,
                'children_max' => 100,
                'adults_min' => 70,
                'adults_max' => 100,
                'women_min' => 70,
                'women_max' => 100,
                'men_min' => 70,
                'men_max' => 100,
                'unit' => 'mg/dL'
            ],

            // 26. HbA1c
            [
                'lab_analys_id' => 26,
                'newborns_min' => 4.0,
                'newborns_max' => 6.0,
                'children_min' => 4.0,
                'children_max' => 6.0,
                'adults_min' => 4.0,
                'adults_max' => 6.0,
                'women_min' => 4.0,
                'women_max' => 6.0,
                'men_min' => 4.0,
                'men_max' => 6.0,
                'unit' => '%'
            ],

            // 27. هرمون النمو (Growth Hormone)
            [
                'lab_analys_id' => 27,
                'newborns_min' => 5,
                'newborns_max' => 40,
                'children_min' => 0,
                'children_max' => 20,
                'adults_min' => 0,
                'adults_max' => 10,
                'women_min' => 0,
                'women_max' => 10,
                'men_min' => 0,
                'men_max' => 10,
                'unit' => 'ng/mL'
            ],

            // 28. الهيموجلوبين (Hemoglobin)
            [
                'lab_analys_id' => 28,
                'newborns_min' => 14,
                'newborns_max' => 24,
                'children_min' => 11,
                'children_max' => 16,
                'adults_min' => 12,
                'adults_max' => 18,
                'women_min' => 12,
                'women_max' => 16,
                'men_min' => 14,
                'men_max' => 18,
                'unit' => 'g/dL'
            ],

            // 29. هرمون LH
            [
                'lab_analys_id' => 29,
                'newborns_min' => 0.1,
                'newborns_max' => 3.0,
                'children_min' => 0.1,
                'children_max' => 3.0,
                'adults_min' => 1.0,
                'adults_max' => 12.0,
                'women_min' => 1.0,
                'women_max' => 30.0,
                'men_min' => 1.0,
                'men_max' => 10.0,
                'unit' => 'mIU/mL'
            ],

            // 30. المغنيسيوم (Magnesium)
            [
                'lab_analys_id' => 30,
                'newborns_min' => 1.5,
                'newborns_max' => 2.5,
                'children_min' => 1.7,
                'children_max' => 2.3,
                'adults_min' => 1.7,
                'adults_max' => 2.3,
                'women_min' => 1.7,
                'women_max' => 2.3,
                'men_min' => 1.7,
                'men_max' => 2.3,
                'unit' => 'mg/dL'
            ],

            // 31. الفوسفور (Phosphorus)
            [
                'lab_analys_id' => 31,
                'newborns_min' => 4.0,
                'newborns_max' => 8.0,
                'children_min' => 3.0,
                'children_max' => 6.0,
                'adults_min' => 2.5,
                'adults_max' => 4.5,
                'women_min' => 2.5,
                'women_max' => 4.5,
                'men_min' => 2.5,
                'men_max' => 4.5,
                'unit' => 'mg/dL'
            ],

            // 32. البوتاسيوم (Potassium)
            [
                'lab_analys_id' => 32,
                'newborns_min' => 3.5,
                'newborns_max' => 6.0,
                'children_min' => 3.5,
                'children_max' => 5.5,
                'adults_min' => 3.5,
                'adults_max' => 5.0,
                'women_min' => 3.5,
                'women_max' => 5.0,
                'men_min' => 3.5,
                'men_max' => 5.0,
                'unit' => 'mEq/L'
            ],

            // 33. البروجسترون (Progesterone)
            [
                'lab_analys_id' => 33,
                'newborns_min' => 0,
                'newborns_max' => 1.0,
                'children_min' => 0,
                'children_max' => 1.0,
                'adults_min' => 0,
                'adults_max' => 20,
                'women_min' => 0,
                'women_max' => 20,
                'men_min' => 0,
                'men_max' => 1.0,
                'unit' => 'ng/mL'
            ],

            // 34. البرولاكتين (Prolactin)
            [
                'lab_analys_id' => 34,
                'newborns_min' => 5,
                'newborns_max' => 25,
                'children_min' => 5,
                'children_max' => 20,
                'adults_min' => 5,
                'adults_max' => 25,
                'women_min' => 5,
                'women_max' => 40,
                'men_min' => 5,
                'men_max' => 20,
                'unit' => 'ng/mL'
            ],

            // 35. البروتين الكلي (Protein, Total)
            [
                'lab_analys_id' => 35,
                'newborns_min' => 4.5,
                'newborns_max' => 7.0,
                'children_min' => 5.5,
                'children_max' => 7.5,
                'adults_min' => 6.0,
                'adults_max' => 8.3,
                'women_min' => 6.0,
                'women_max' => 8.3,
                'men_min' => 6.0,
                'men_max' => 8.3,
                'unit' => 'g/dL'
            ],

            // 36. زمن البروثرومبين (PT)
            [
                'lab_analys_id' => 36,
                'newborns_min' => 12,
                'newborns_max' => 20,
                'children_min' => 11,
                'children_max' => 15,
                'adults_min' => 11,
                'adults_max' => 13,
                'women_min' => 11,
                'women_max' => 13,
                'men_min' => 11,
                'men_max' => 13,
                'unit' => 'seconds'
            ],

            // 37. PTT
            [
                'lab_analys_id' => 37,
                'newborns_min' => 25,
                'newborns_max' => 45,
                'children_min' => 25,
                'children_max' => 40,
                'adults_min' => 25,
                'adults_max' => 35,
                'women_min' => 25,
                'women_max' => 35,
                'men_min' => 25,
                'men_max' => 35,
                'unit' => 'seconds'
            ],

            // 38. الصوديوم (Sodium)
            [
                'lab_analys_id' => 38,
                'newborns_min' => 135,
                'newborns_max' => 145,
                'children_min' => 135,
                'children_max' => 145,
                'adults_min' => 135,
                'adults_max' => 145,
                'women_min' => 135,
                'women_max' => 145,
                'men_min' => 135,
                'men_max' => 145,
                'unit' => 'mEq/L'
            ],

            // 39. T3
            [
                'lab_analys_id' => 39,
                'newborns_min' => 100,
                'newborns_max' => 300,
                'children_min' => 100,
                'children_max' => 250,
                'adults_min' => 80,
                'adults_max' => 200,
                'women_min' => 80,
                'women_max' => 200,
                'men_min' => 80,
                'men_max' => 200,
                'unit' => 'ng/dL'
            ],

            // 40. T4
            [
                'lab_analys_id' => 40,
                'newborns_min' => 7,
                'newborns_max' => 16,
                'children_min' => 5,
                'children_max' => 14,
                'adults_min' => 5,
                'adults_max' => 12,
                'women_min' => 5,
                'women_max' => 12,
                'men_min' => 5,
                'men_max' => 12,
                'unit' => 'μg/dL'
            ],

            // 41. T4 الحر (Free T4)
            [
                'lab_analys_id' => 41,
                'newborns_min' => 0.8,
                'newborns_max' => 2.0,
                'children_min' => 0.8,
                'children_max' => 2.0,
                'adults_min' => 0.8,
                'adults_max' => 1.8,
                'women_min' => 0.8,
                'women_max' => 1.8,
                'men_min' => 0.8,
                'men_max' => 1.8,
                'unit' => 'ng/dL'
            ],

            // 42. التستوستيرون الحر (Free Testosterone)
            [
                'lab_analys_id' => 42,
                'newborns_min' => 0.1,
                'newborns_max' => 2.0,
                'children_min' => 0.1,
                'children_max' => 0.5,
                'adults_min' => 1.0,
                'adults_max' => 30.0,
                'women_min' => 0.1,
                'women_max' => 2.0,
                'men_min' => 5.0,
                'men_max' => 30.0,
                'unit' => 'pg/mL'
            ],

            // 43. حمض اليوريك (Uric Aclab_analys_id)
            [
                'lab_analys_id' => 43,
                'newborns_min' => 2.0,
                'newborns_max' => 6.0,
                'children_min' => 2.0,
                'children_max' => 5.5,
                'adults_min' => 3.0,
                'adults_max' => 7.0,
                'women_min' => 2.5,
                'women_max' => 6.0,
                'men_min' => 3.5,
                'men_max' => 7.0,
                'unit' => 'mg/dL'
            ],

            // 44. اليوريا (Urea)
            [
                'lab_analys_id' => 44,
                'newborns_min' => 5,
                'newborns_max' => 25,
                'children_min' => 5,
                'children_max' => 20,
                'adults_min' => 10,
                'adults_max' => 50,
                'women_min' => 10,
                'women_max' => 50,
                'men_min' => 10,
                'men_max' => 50,
                'unit' => 'mg/dL'
            ],

            // 45. فيتامين B12
            [
                'lab_analys_id' => 45,
                'newborns_min' => 160,
                'newborns_max' => 1300,
                'children_min' => 200,
                'children_max' => 900,
                'adults_min' => 200,
                'adults_max' => 900,
                'women_min' => 200,
                'women_max' => 900,
                'men_min' => 200,
                'men_max' => 900,
                'unit' => 'pg/mL'
            ],

            // 46. فيتامين D (1,25-Dihydroxy)
            [
                'lab_analys_id' => 46,
                'newborns_min' => 15,
                'newborns_max' => 90,
                'children_min' => 20,
                'children_max' => 80,
                'adults_min' => 20,
                'adults_max' => 80,
                'women_min' => 20,
                'women_max' => 80,
                'men_min' => 20,
                'men_max' => 80,
                'unit' => 'pg/mL'
            ],

            // 47. الزنك (Zinc)
            [
                'lab_analys_id' => 47,
                'newborns_min' => 50,
                'newborns_max' => 120,
                'children_min' => 60,
                'children_max' => 130,
                'adults_min' => 70,
                'adults_max' => 150,
                'women_min' => 70,
                'women_max' => 150,
                'men_min' => 70,
                'men_max' => 150,
                'unit' => 'μg/dL'
            ],

            // 48. البيليروبين الكلي (Bilirubin, Total)
            [
                'lab_analys_id' => 48,
                'newborns_min' => 0.2,
                'newborns_max' => 12.0,
                'children_min' => 0.2,
                'children_max' => 1.2,
                'adults_min' => 0.2,
                'adults_max' => 1.2,
                'women_min' => 0.2,
                'women_max' => 1.2,
                'men_min' => 0.2,
                'men_max' => 1.2,
                'unit' => 'mg/dL'
            ],

            // 49. البيليروبين المباشر (Bilirubin, Direct)
            [
                'lab_analys_id' => 49,
                'newborns_min' => 0,
                'newborns_max' => 0.4,
                'children_min' => 0,
                'children_max' => 0.4,
                'adults_min' => 0,
                'adults_max' => 0.4,
                'women_min' => 0,
                'women_max' => 0.4,
                'men_min' => 0,
                'men_max' => 0.4,
                'unit' => 'mg/dL'
            ],

            // 50. الكورتيزول (Cortisol)
            [
                'lab_analys_id' => 50,
                'newborns_min' => 2,
                'newborns_max' => 20,
                'children_min' => 2,
                'children_max' => 20,
                'adults_min' => 5,
                'adults_max' => 25,
                'women_min' => 5,
                'women_max' => 25,
                'men_min' => 5,
                'men_max' => 25,
                'unit' => 'μg/dL'
            ],

            // 51. DHEA-S
            [
                'lab_analys_id' => 51,
                'newborns_min' => 20,
                'newborns_max' => 300,
                'children_min' => 5,
                'children_max' => 100,
                'adults_min' => 30,
                'adults_max' => 500,
                'women_min' => 30,
                'women_max' => 350,
                'men_min' => 50,
                'men_max' => 500,
                'unit' => 'μg/dL'
            ],

            // 52. الإستراديول (Estradiol)
            [
                'lab_analys_id' => 52,
                'newborns_min' => 0,
                'newborns_max' => 20,
                'children_min' => 0,
                'children_max' => 20,
                'adults_min' => 10,
                'adults_max' => 400,
                'women_min' => 10,
                'women_max' => 400,
                'men_min' => 10,
                'men_max' => 50,
                'unit' => 'pg/mL'
            ],

            // 53. الفولات (Folate)
            [
                'lab_analys_id' => 53,
                'newborns_min' => 2,
                'newborns_max' => 20,
                'children_min' => 3,
                'children_max' => 20,
                'adults_min' => 3,
                'adults_max' => 20,
                'women_min' => 3,
                'women_max' => 20,
                'men_min' => 3,
                'men_max' => 20,
                'unit' => 'ng/mL'
            ],

            // 54. الجلوبيولين (Globulin)
            [
                'lab_analys_id' => 54,
                'newborns_min' => 1.5,
                'newborns_max' => 3.5,
                'children_min' => 1.5,
                'children_max' => 3.5,
                'adults_min' => 1.5,
                'adults_max' => 3.5,
                'women_min' => 1.5,
                'women_max' => 3.5,
                'men_min' => 1.5,
                'men_max' => 3.5,
                'unit' => 'g/dL'
            ],

            // 55. هرمون النمو (Growth Hormone)
            [
                'lab_analys_id' => 55,
                'newborns_min' => 5,
                'newborns_max' => 40,
                'children_min' => 0,
                'children_max' => 20,
                'adults_min' => 0,
                'adults_max' => 10,
                'women_min' => 0,
                'women_max' => 10,
                'men_min' => 0,
                'men_max' => 10,
                'unit' => 'ng/mL'
            ],

            // 56. الهيماتوكريت (Hematocrit)
            [
                'lab_analys_id' => 56,
                'newborns_min' => 44,
                'newborns_max' => 64,
                'children_min' => 35,
                'children_max' => 45,
                'adults_min' => 36,
                'adults_max' => 50,
                'women_min' => 36,
                'women_max' => 46,
                'men_min' => 40,
                'men_max' => 50,
                'unit' => '%'
            ],

            // 57. الهيموجلوبين A1c (HbA1c)
            [
                'lab_analys_id' => 57,
                'newborns_min' => 4.0,
                'newborns_max' => 6.0,
                'children_min' => 4.0,
                'children_max' => 6.0,
                'adults_min' => 4.0,
                'adults_max' => 6.0,
                'women_min' => 4.0,
                'women_max' => 6.0,
                'men_min' => 4.0,
                'men_max' => 6.0,
                'unit' => '%'
            ],

            // 58. الهوموسيستين (Homocysteine)
            [
                'lab_analys_id' => 58,
                'newborns_min' => 2,
                'newborns_max' => 10,
                'children_min' => 4,
                'children_max' => 12,
                'adults_min' => 4,
                'adults_max' => 15,
                'women_min' => 4,
                'women_max' => 15,
                'men_min' => 5,
                'men_max' => 15,
                'unit' => 'μmol/L'
            ],

            // 59. IgA
            [
                'lab_analys_id' => 59,
                'newborns_min' => 0,
                'newborns_max' => 10,
                'children_min' => 20,
                'children_max' => 200,
                'adults_min' => 70,
                'adults_max' => 400,
                'women_min' => 70,
                'women_max' => 400,
                'men_min' => 5,
                'men_max' => 15,
                'unit' => 'μmol/L'
            ],
            [
                'lab_analys_id' => 60,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 61,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 62,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 63,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 64,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 65,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 66,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 67,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 68,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 69,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 70,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 71,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 72,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 73,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 74,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 75,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 76,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 77,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            [
                'lab_analys_id' => 78,
                'newborns_min' => 0,
                'newborns_max' => 0,
                'children_min' => 0,
                'children_max' => 0,
                'adults_min' => 0,
                'adults_max' => 0,
                'women_min' => 0,
                'women_max' => 0,
                'men_min' => 0,
                'men_max' => 0,
                'unit' => 'mIU/mL'
            ],
            ['lab_analys_id' => 79, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 80, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 81, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 82, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 83, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 84, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 85, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 86, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 87, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 88, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 89, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 90, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 91, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 92, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 93, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 94, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 95, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 96, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 97, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 98, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 99, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 100, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 101, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 102, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 103, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 104, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 105, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 106, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 107, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 108, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 109, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 110, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 111, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 112, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 113, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 114, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 115, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 116, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 117, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 118, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 119, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 120, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 121, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 122, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 123, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 124, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 125, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 126, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 127, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 128, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 129, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 130, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 131, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 132, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 133, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 134, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 135, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 136, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 137, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 138, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 139, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 140, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 141, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 142, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 143, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 144, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 145, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 146, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 147, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 148, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 149, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 150, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 151, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 152, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 153, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 154, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 155, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 156, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 157, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 158, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 159, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 160, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 161, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 162, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 163, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 164, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 165, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 166, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 167, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 168, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 169, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 170, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 171, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 172, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 173, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 174, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 175, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 176, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 177, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 178, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 179, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 180, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 181, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 182, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 183, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 184, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 185, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 186, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 187, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 188, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 189, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 190, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 191, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 192, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 193, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 194, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 195, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 196, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 197, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 198, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 199, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 200, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 201, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 202, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 203, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 204, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 205, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 206, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 207, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 208, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 209, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 210, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 211, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 212, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 213, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 214, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 215, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 216, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 217, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 218, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 219, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 220, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 221, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 222, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 223, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 224, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 225, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 226, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 227, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 228, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 229, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 230, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 231, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 232, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 233, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 234, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 235, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 236, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 237, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 238, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 239, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 240, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 241, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 242, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 243, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 244, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 245, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 246, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 247, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 248, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 249, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 250, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 251, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 252, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 253, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 254, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 255, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 256, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 257, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 258, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 259, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 260, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 261, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 262, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 263, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 264, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 265, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 266, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 267, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 268, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 269, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 270, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 271, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 272, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 273, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 274, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 275, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 276, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 277, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 278, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 279, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 280, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 281, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 282, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 283, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 284, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 285, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 286, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 287, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 288, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 289, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 290, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 291, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 292, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 293, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 294, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 295, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 296, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 297, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 298, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 299, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 300, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 301, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 302, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 303, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 304, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 305, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 306, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 307, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 308, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 309, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 310, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 311, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 312, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 313, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 314, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 315, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 316, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 317, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 318, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 319, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 320, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 321, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 322, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 323, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 324, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 325, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 326, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 327, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 328, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 329, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 330, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 331, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 332, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 333, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 334, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 335, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 336, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 337, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 338, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 339, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 340, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 341, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 342, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 343, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 344, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 345, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 346, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 347, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 348, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 349, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 350, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 351, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 352, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 353, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 354, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 355, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 356, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 357, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 358, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 359, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 360, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 361, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 362, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 363, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 364, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 365, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 366, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 367, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 368, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 369, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 370, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 371, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 372, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 373, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 374, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 375, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 376, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 377, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 378, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 379, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 380, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 381, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 382, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 383, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 384, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 385, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 386, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 387, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 388, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 389, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 390, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 391, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 392, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 393, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 394, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 395, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 396, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 397, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 398, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 399, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 400, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 401, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 402, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 403, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 404, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 405, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 406, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 407, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 408, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 409, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 410, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 411, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 412, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 413, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 414, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 415, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 416, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 417, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 418, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 419, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 420, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 421, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 422, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 423, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 424, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 425, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 426, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 427, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 428, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 429, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 430, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 431, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 432, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 433, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 434, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 435, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 436, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 437, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 438, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 439, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 440, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 441, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 442, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 443, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 444, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 445, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 446, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 447, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 448, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 449, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 450, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 451, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 452, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 453, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 454, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 455, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 456, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 457, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 458, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 459, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 460, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 461, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 462, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 463, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 464, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 465, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 466, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 467, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 468, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 469, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 470, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 471, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 472, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 473, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 474, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 475, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 476, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 477, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 478, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 479, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 480, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 481, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 482, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 483, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 484, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 485, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 486, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 487, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 488, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 489, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 490, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 491, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 492, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 493, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 494, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 495, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 496, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 497, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 498, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 499, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 500, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 501, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 502, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 503, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 504, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 505, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 506, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 507, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 508, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 509, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 510, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 511, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 512, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 513, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 514, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 515, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 516, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 517, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 518, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 519, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 520, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 521, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 522, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 523, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 524, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 525, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 526, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 527, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 528, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 529, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 530, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 531, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 532, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 533, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 534, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 535, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 536, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 537, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 538, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 539, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 540, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 541, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 542, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 543, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 544, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 545, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 546, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 547, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 548, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 549, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL'],
            ['lab_analys_id' => 550, 'newborns_min' => 0, 'newborns_max' => 0, 'children_min' => 0, 'children_max' => 0, 'adults_min' => 0, 'adults_max' => 0, 'women_min' => 0, 'women_max' => 0, 'men_min' => 0, 'men_max' => 0, 'unit' => 'mIU/mL']
        ];
        $labAnalyses2 = [
            ['lab_analyses_name' => '1 & 25-Dihydroxy Vitamin D', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => '5-HIAA (Quantitative)', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب الأطعمة الغنية بالسيروتونين (الموز، الجوز، الطماطم) لمدة 3 أيام قبل الفحص'],
            ['lab_analyses_name' => '17-Hydroxy Progesterone', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'يفضل عينة الصباح (7-9 صباحاً)'],
            ['lab_analyses_name' => '17-Hydroxycorticosteroids', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة مع مادة حافظة'],
            ['lab_analyses_name' => '17-Ketosteroids', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة مع مادة حافظة'],
            ['lab_analyses_name' => '17-OH Progesterone neonatal, 170HPRG-Neo.', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => '25-Hydroxy-Vitamin D2, or D3', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ACE, Angiotensin Converting Enzyme', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Acetaminophen', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Acetylcholine receptor antibody', 'global_price' => 100, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ACP, Acid Phosphatase', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب الفحص الشرجي قبل الفحص'],
            ['lab_analyses_name' => 'ACTH, Adrenocorticotropic Hormone', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'عينة الصباح، الصيام، والحفاظ على العينة باردة'],
            ['lab_analyses_name' => 'Activated Protein C Resistance (APC-R)', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف مضادات التخثر 7 أيام قبل الفحص'],
            ['lab_analyses_name' => 'Acyclearnidine, quantitative profile', 'global_price' => 100, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Adenosine Deaminase (ADA)', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ADH, Anti Diuretic Hormone', 'global_price' => 60, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Adrenaline / Epinephrine', 'global_price' => 40, 'discipline' => 'Hormone', 'preconditions' => 'تجنب التوتر والتمارين الشاقة قبل الفحص'],
            ['lab_analyses_name' => 'AFB Ab (ICT) (Mycobacterium Bacilli)', 'global_price' => 10, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFB by PCR, M. Tuberculosis DNA by PCR', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFB Culture (Mycobacterium Bacilli)', 'global_price' => 16, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFB Culture, Automated (MEGIT Liquid Media)', 'global_price' => 60, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFB Smear (Mycobacterium Bacilli)', 'global_price' => 6, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFB Susceptibility Test (Mycobacterium Bacilli)', 'global_price' => 40, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AFP, α Feto Protein', 'global_price' => 16, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Albumin CSF', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Albumin serum or other fluid except CSF', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Aldolase', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب التمارين الشاقة قبل الفحص'],
            ['lab_analyses_name' => 'Aldosterone', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'يفضل الجلوس لمدة 30 دقيقة قبل سحب العينة'],
            ['lab_analyses_name' => 'Aldosterone 24 hour urine', 'global_price' => 50, 'discipline' => 'Hormone', 'preconditions' => 'جمع بول 24 ساعة مع مادة حافظة'],
            ['lab_analyses_name' => 'ALP, Alkaline Phosphatase', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ALP, Bone (Bone-Alkaline Phosphatase)', 'global_price' => 40, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ALT (SGPT)', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Aluminium', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب استخدام مضادات التعرق قبل الفحص'],
            ['lab_analyses_name' => 'AMA, Anti Mitochondrial Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AMA M2 (Anti-Mitochondrial Ab M2)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Amebiasis Serological Test', 'global_price' => 10, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Amikacin', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Amino Acids CSF or urine', 'global_price' => 160, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Amino Acids, (Quantitative) HPLC', 'global_price' => 100, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AML with t(15,17) PML/RARa by PCR or Fish', 'global_price' => 240, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ammonia', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'عينة دم شرياني، تبريد العينة فوراً'],
            ['lab_analyses_name' => 'Amphetamine Titre', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Amylase', 'global_price' => 7, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Amylase pancreatic', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ANA, Antinuclear Ab', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ANCA (P&C) Anti-Neutrophil Cytoplasmic Ab', 'global_price' => 40, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ANCA-C, Proteinase 3 Ab (PR3)', 'global_price' => 20, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ANCA-P, Myeloperoxidase Ab (Anti - MPO)', 'global_price' => 20, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-Centromere', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-Jo-1', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti - Scl - 70', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti - Sem', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti - UIRNP', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti Mullerian Hormone (AMH)', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-Deamulated Giladin peptides (DGP screen)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-DGP & t-Transglutaminase Abs (tTG/DGP screen)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-Histone Abs', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-insulin Abs', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-platelet antibodies', 'global_price' => 60, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-ribosomal', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Anti-Thrombin III', 'global_price' => 20, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Apolipoprotein - Al', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Apolipoprotein - B', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Arsenic', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'ASCA IgA, Saccharomyces Cerevisiae IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ASCA IgG, Saccharomyces Cerevisiae IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ASLO, Antistreptolysin O (Quantitative)', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'AST (SGOT)', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial CSF Meningitis Ag Latex Detection of 5 bacteria', 'global_price' => 70, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial CSF Meningitis Detection by PCR of 5 bacteria', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial Culture & Susceptibility. manual, Kirby Bauer', 'global_price' => 20, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial Identification (Automated)', 'global_price' => 40, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial Smear', 'global_price' => 6, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bacterial Susceptibility Panel Automated (MIC)', 'global_price' => 40, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bence-Jones Protein, Qualitative', 'global_price' => 2, 'discipline' => 'Urine', 'preconditions' => 'عينة بول مركزة (الصباح الأول)'],
            ['lab_analyses_name' => 'Benzodiazepines Titre', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bicarbonate HCO3', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'عينة دم شرياني، نقل العينة بسرعة'],
            ['lab_analyses_name' => 'Bile acids total', 'global_price' => 40, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Bilharsiosis Serological Test', 'global_price' => 10, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bilirubin (total & direct & indirect)', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب التعرض للضوء الساطع'],
            ['lab_analyses_name' => 'Bilirubin neonatal', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bleeding & Coagulation Time', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Blood Culture Aerobic Automated', 'global_price' => 100, 'discipline' => 'Microbiology', 'preconditions' => 'أخذ العينة قبل إعطاء المضادات الحيوية'],
            ['lab_analyses_name' => 'Blood Culture Anaerobic Automated', 'global_price' => 100, 'discipline' => 'Microbiology', 'preconditions' => 'أخذ العينة قبل إعطاء المضادات الحيوية'],
            ['lab_analyses_name' => 'Blood Culture Aerobic&Anaerobic Automated', 'global_price' => 200, 'discipline' => 'Microbiology', 'preconditions' => 'أخذ العينة قبل إعطاء المضادات الحيوية'],
            ['lab_analyses_name' => 'Blood Culture manual', 'global_price' => 15, 'discipline' => 'Microbiology', 'preconditions' => 'أخذ العينة قبل إعطاء المضادات الحيوية'],
            ['lab_analyses_name' => 'Blood Film Inspection', 'global_price' => 10, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Blood Gases', 'global_price' => 24, 'discipline' => 'Chemistry', 'preconditions' => 'عينة دم شرياني، نقل العينة بسرعة'],
            ['lab_analyses_name' => 'Blood Group & Rh', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Blood Group & Rh (Gel)', 'global_price' => 8, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Blood Group, Sub-typing, (C-c-E-e-K etc.) Gel Technology', 'global_price' => 25, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bordetella Pertussis IgG', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bordetella Pertussis IgM', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Bromide', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Brucella IgG Ab (EIA)', 'global_price' => 24, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Brucella IgM Ab (EIA)', 'global_price' => 24, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Brucella PCR', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'BTA, Bladder Tumour Antigen', 'global_price' => 80, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'B-Trace Protein in CSF', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'C1 Esterase Inhibitor', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'C1q Complement', 'global_price' => 40, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'C3 Complement', 'global_price' => 10, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'C4 Complement', 'global_price' => 10, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CA 125, Cancer Antigen 125', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CA 15.3, Cancer Antigen 15.3', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CA 19.9, Carbohydrate Antigen 19.9', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CA 72-4', 'global_price' => 32, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cadmium', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Calcitonin', 'global_price' => 20, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Calcium', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Calcium, Ionised', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'عينة دم شرياني، نقل العينة بسرعة'],
            ['lab_analyses_name' => 'Calprotectin, Qualitative (ICT)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Calprotectin, Quantitative (ELIZA)', 'global_price' => 64, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Calprotectin and lactoferin', 'global_price' => 40, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cannabinoids (THC) Titre', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Carbamazepine (Tegretol)', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Carbon Dioxide (CO2)', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cardiolipin Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cardiolipin Ab IgM', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cardiovascular Disease, CVD 12 Mutation', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Carnitine L', 'global_price' => 40, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Carnitine total and free', 'global_price' => 100, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Catecholamines fractions by HPLC', 'global_price' => 120, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب الشوكولاتة، القهوة، الموز قبل الفحص'],
            ['lab_analyses_name' => 'CBC Body Fluids', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CBC, Complete Blood Count with platelets Automated', 'global_price' => 10, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CEA, Carcinoembryonic Antigen', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ceruloplasmin', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cervical Smear, Direct Exam', 'global_price' => 3, 'discipline' => 'Microbiology', 'preconditions' => 'تجنب العلاجات المهبلية قبل 48 ساعة'],
            ['lab_analyses_name' => 'CH 50, total complement', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chlamydia Ab IgA (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chlamydia Ab IgG (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chlamydia Ab IgM (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chlamydia detection Ab', 'global_price' => 12, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chloride', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cholesterol', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Cholesterol, HDL', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Cholesterol, LDL', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Cholinesterase', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Chromium', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Chromogranin A', 'global_price' => 60, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Citrate 24 hours urine', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'CK, Creatine Kinase', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب التمارين الشاقة قبل الفحص'],
            ['lab_analyses_name' => 'CK-MB, Creatine Kinase Muscle & Brain', 'global_price' => 12, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Clostridium difficile A&B Toxin in stool', 'global_price' => 32, 'discipline' => 'Microbiology', 'preconditions' => 'عينة طازجة غير مجمدة'],
            ['lab_analyses_name' => 'CMV Ab IgG (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CMV Ab IgM (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CMV Ab IgG avidity', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CMV-DNA by PCR (Cytomegalovirus)', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coagulation Factor II Mutation', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coagulation Factor V Leiden Mutation', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coagulation Factor V Mutation', 'global_price' => 140, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coagulation Factor VII Mutation', 'global_price' => 140, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coagulation Time (Lee-White)', 'global_price' => 3, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cobalt', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cocaine Metabolites Titre', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cold Agglutinins', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'حفظ العينة دافئة أثناء النقل'],
            ['lab_analyses_name' => 'Coombs Direct', 'global_price' => 5, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Coombs Indirect', 'global_price' => 6, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Copper', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cortisol serum', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'عينة الصباح (7-9 صباحاً)'],
            ['lab_analyses_name' => 'Cortisol free in 24 hour urine', 'global_price' => 20, 'discipline' => 'Hormone', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Creatinine serum or body fluids', 'global_price' => 6, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Creatinine Clearance', 'global_price' => 12, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Crossmatch (Gel Technology)', 'global_price' => 8, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Crossmatch (Serology)', 'global_price' => 6, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Crossmatch HLA (Lymphocytotoxicity Assay)', 'global_price' => 60, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Crossmatch Tissue (HLA-Cup)', 'global_price' => 120, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CRP, C-Reactive Protein (Quantitative)', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'CRP-LUS (C-Reactive Protein Latex Ultra Sensitive)', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cryoglobulins (gel)', 'global_price' => 10, 'discipline' => 'Haematology', 'preconditions' => 'حفظ العينة دافئة أثناء النقل'],
            ['lab_analyses_name' => 'Cryptococcus Antigen', 'global_price' => 40, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cryptosporidium Ag', 'global_price' => 10, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Crystals Articular fluid', 'global_price' => 8, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cyclic Citrullinated Peptide Ab (Anti - CCP)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cyclosporine', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Cyfra 21', 'global_price' => 40, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cystatin-C', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cystic Fibrosis Mutation Screen, CF 36 Mutation', 'global_price' => 300, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Cystine 24 hours urine', 'global_price' => 80, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'D-Dimer', 'global_price' => 24, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Delta 4- Androstene Dione', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Delta Amino Levulenic Acid', 'global_price' => 24, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'DHEA-SO, Dehydroepiandrosterone', 'global_price' => 20, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Diarrhoea multiplex detection By PCR', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'عينة براز طازجة'],
            ['lab_analyses_name' => 'Digoxin', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Dihydrotestosterone', 'global_price' => 20, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'DNA, Double-stranded Ab', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Drugs of Abuse screen 10 parameters', 'global_price' => 80, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'EBV Ab IgG, Epstein-Barr Virus (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'EBV Ab IgM, Epstein-Barr Virus (EIA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'EBV-DNA by PCR (Epstein Barr Virus)', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Echinococcus Ab (III)', 'global_price' => 15, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Echinococcus IgG EIA', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Elastase, Pancreatic Elastase in stool', 'global_price' => 40, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin screen neonatal', 'global_price' => 20, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Haemoglobin Variant by HPLC', 'global_price' => 20, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Lipids', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins CSF or Fluids', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Proteins Urine', 'global_price' => 50, 'discipline' => 'Urine', 'preconditions' => 'عينة بول مركزة (الصباح الأول)'],
            ['lab_analyses_name' => 'Electrophoresis, Serum immunofixation', 'global_price' => 100, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Electrophoresis, Urine immunofixation', 'global_price' => 160, 'discipline' => 'Urine', 'preconditions' => 'عينة بول مركزة (الصباح الأول)'],
            ['lab_analyses_name' => 'ENA-6 Screen Elisa (Extractable Nuclear Antibodies)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Endomysial IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Endomysial IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Entamobahistolytica IgG', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Eosinophils in Sputum or Nasal Discharge', 'global_price' => 2, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Erythropoietin', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'ESR, Erythrocytes Sedimentation Rate', 'global_price' => 3, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Estradiol', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Estriol, Free (Unconjugated)', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ethanol, Serum', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor X', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor II', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor IX', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor V', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor VII', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor VIII', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor VIII antibody inhibitor screen', 'global_price' => 80, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor XI', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor XII coagulation', 'global_price' => 50, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Factor XIII coagulation', 'global_price' => 80, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'FDP, Fibrinogen/Fibrin Degradation Products', 'global_price' => 16, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ferritin', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fibrinogen', 'global_price' => 12, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, immunodeficiency panel', 'global_price' => 140, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, Leukaemia/Lymphoma immunophenotyping panel bio', 'global_price' => 250, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, MRD (Minimal Residual Disease)', 'global_price' => 140, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, platelets immunophenotyping', 'global_price' => 140, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, PNH (Paroxysmal nocturnal hemoglobinuria)', 'global_price' => 140, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Flowcytometry, T-cell subset quantification including NK', 'global_price' => 140, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'FMF, Familial Mediterranean Fever, 12 Mutation', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Folic Acid', 'global_price' => 24, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Folic acid in RBC', 'global_price' => 48, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fragility Test for RBC', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fructosamine', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fructose-Seminal fluid', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'FSH, Follicle-stimulating IHormone', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fungal Culture Automated', 'global_price' => 40, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fungal Culture Manual', 'global_price' => 16, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Fungal Smear', 'global_price' => 6, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'y GT, Gamma-glutamyltransferase', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'G6 PD, Glucose-6-phosphate dehydrogenase', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'G6PD neonatal', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'GAL-1 P-Uridyle Transferase GAIT', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Galactose', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Gastrin', 'global_price' => 32, 'discipline' => 'Hormone', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Gentamicin', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Giladin Ab IgA', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Giladin Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Glomerular Basement Membrane Ab (Anti GBM)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Glucose', 'global_price' => 2, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 8 ساعات للنتائج الدقيقة'],
            ['lab_analyses_name' => 'Glucose Tolerance Test', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 8-12 ساعة قبل الفحص، عدم التدخين خلال الفحص'],
            ['lab_analyses_name' => 'Glutamic Acid Decarboxylase Ab, Anti GAD', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Glycosylated Haemoglobin, HbA1c', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Growth Hormone (GH)', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'الصيام 12 ساعة، الراحة قبل الفحص'],
            ['lab_analyses_name' => 'Ham Test', 'global_price' => 20, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Haptoglobin', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HAV Ab IgG (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HAV Ab IgM (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HAV Ab total (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBe Ab IgG (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBe Ab IgM (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBe Ab total (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBe Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBe Ag (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBs Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBs Ag (EIA) Quantitative', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HBV, Hepatitis B Virus DNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HCV Ab (EIA) Quantitative', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HCV, Hepatitis C Virus RNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HCV Genotyping by PCR', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HDV, Hepatitis D Virus RNA Quantitative by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HDV Ab IgM (EIA) Quantitative', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HDV Ab total (EIA) Quantitative', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ab IgA', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Helicobacter Pylori Ag, Stool', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Helicobacter pylori Breath test', 'global_price' => 80, 'discipline' => 'Microbiology', 'preconditions' => 'الصيام 6 ساعات، عدم استخدام مضادات الحموضة قبل الفحص'],
            ['lab_analyses_name' => 'Hemochromatosis HFE by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Hemosiderin Blood film or urine', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HIT Abs PF4, Heparin induced Thrombocytopenia', 'global_price' => 80, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA-B5 Typing', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA Class I & II Typing (A, B, DR) by PCR', 'global_price' => 320, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA Class I Typing (Cw)', 'global_price' => 50, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA Class II Typing (DQ)', 'global_price' => 50, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA Class II Typing (DR, DQ) Serology', 'global_price' => 120, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA-A,B,DR,DQ,DP typing by high resolution assay', 'global_price' => 400, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HLA-B27 Typing', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Home Specimen Collection', 'global_price' => 3, 'discipline' => 'Specimen', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Homocysteine', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Homocysteine, Quantitative, HPLC, Urine', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'HSV I & II IgG, Herpes Simplex Virus', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HSV I & II IgM, Herpes Simplex Virus', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HSV DNA by PCR Detection (Herpes Simplex Virus)', 'global_price' => 100, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'HTLV-I & II Ab (Human T-cell Lymphotropic Virus)', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Human Papillome Virus (HPV) by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgD,immunoglobulin D', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgE Profile of more than 30 food allergen quantitative', 'global_price' => 300, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgE Profile of more than 30 inhalant allergen quantitative', 'global_price' => 300, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgE screen for 18 food allergen qualitative', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgE screen for 18 food inhalant qualitative', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IGF bp-3, Insulin-like growth factor 3-binding protein', 'global_price' => 50, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IGF I, Insulin Like Growth Factor I (Somatomedia C)', 'global_price' => 52, 'discipline' => 'Hormone', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'IgG Profile of more than 30 food allergen quantitative', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgG subclass 1', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgG subclass 2', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgG subclass 3', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'IgG subclass 4', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Immunoglobulin A, IRA', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Immunoglobulin E, IgE', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Immunoglobulin G, IgG CSF', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Immunoglobulin G, IgG', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Immunoglobulin M, IgM', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Influenza A & B Virus Detection', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Inhibin B', 'global_price' => 52, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Inhibin A pregnancy or Tumour', 'global_price' => 52, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Insulin', 'global_price' => 50, 'discipline' => 'Hormone', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Intrinsic factor Abs', 'global_price' => 52, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Iron', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'عينة الصباح، الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Iron saturation (TIBC)', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'عينة الصباح، الصيام 12 ساعة'],
            ['lab_analyses_name' => 'IRT neonatal, Immunoreactivity Trypsinogen', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Islet Cell Antibodies, (AICA)', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Jak2-Mutation', 'global_price' => 50, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'JC/BK, Polyoma Virus by PCR', 'global_price' => 50, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Kappa Chain', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Karyotyping', 'global_price' => 50, 'discipline' => 'Cytogenetic', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Karyotyping amniotic fluid', 'global_price' => 50, 'discipline' => 'Cytogenetic', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Karyotyping Bone marrow', 'global_price' => 200, 'discipline' => 'Cytogenetic', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ketone bodies quantitative', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lactic Acid (lactate)', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'الراحة قبل الفحص، عدم ربط الذراع'],
            ['lab_analyses_name' => 'Lambda Chain', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lamotrigine (Lamictal) HPLC', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'LD, Lactic Dehydrogenase', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب التمارين الشاقة قبل الفحص'],
            ['lab_analyses_name' => 'LE Cells, Lupus Erythematosus', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lead', 'global_price' => 15, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Legionella CFT', 'global_price' => 20, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leishmania Ab', 'global_price' => 20, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leishmania detection by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leishmania Organism Direct examination', 'global_price' => 5, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leptospira IgM Ab', 'global_price' => 32, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leucoscreen (Peroxidase test)', 'global_price' => 8, 'discipline' => 'Seminal fluid', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Leukocytes Alkaline Phosphates, LAP', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'LH, Lutteinizing Hormone', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lipase', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lipids, Total', 'global_price' => 3, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Lipoprotein (a), LP little a', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Listeriosis Serological Test', 'global_price' => 16, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lithium', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Liver Kidney Microsome Ab, Anti LKM I', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Liver cytosol (anti-LCI)', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lyme Borrellosis IgG', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Lyme Borrellosis IgM', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Magnesium', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Malaria Ab', 'global_price' => 10, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Malaria Organism Direct examination', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'أخذ العينة أثناء نوبة الحمى'],
            ['lab_analyses_name' => 'Manganese', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Measles IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Measles IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mercury', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'Metanephrine, Urine', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة مع حمض'],
            ['lab_analyses_name' => 'Methaemoglobin', 'global_price' => 10, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Methotrexate', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Microalbuminuria (Quantitative)', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'جمع بول 24 ساعة أو عينة بول صباحية'],
            ['lab_analyses_name' => 'Mononucleosis infectious', 'global_price' => 4, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mucopolysaccharide, Urine', 'global_price' => 50, 'discipline' => 'Urine', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Multiplex-PCR assay for sexual transmitted disease', 'global_price' => 160, 'discipline' => 'M.Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mumps IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mumps IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mycoplasma Culture', 'global_price' => 32, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mycoplasma IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Mycoplasma IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Myoglobin', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Myoglobin Quantitative urine', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Natriuretic Peptide, B-Type, BNP', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Natriuretic Peptide, NT-Pro, NT-proBNP', 'global_price' => 50, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Neuron - Specific Enolase, NSE', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Nickel', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Normetanephrine with metanephrine profile by HPLC', 'global_price' => 70, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة مع حمض'],
            ['lab_analyses_name' => 'OCB+ Transferrin (Occult blood screen in stool)', 'global_price' => 15, 'discipline' => 'Stool', 'preconditions' => 'تجنب تناول اللحوم الحمراء قبل 3 أيام'],
            ['lab_analyses_name' => 'Occult Blood (ICT)', 'global_price' => 10, 'discipline' => 'Stool', 'preconditions' => 'تجنب تناول اللحوم الحمراء قبل 3 أيام'],
            ['lab_analyses_name' => 'Oligoclonal Bands', 'global_price' => 200, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Opiates Metabolite Titre', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Osmolality', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Osteocalcin', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Ovarian Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Oxalate, Urine (Quantitative)', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة'],
            ['lab_analyses_name' => 'PAP, Prostatic Acid Phosphatase', 'global_price' => 6, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب الفحص الشرجي قبل الفحص'],
            ['lab_analyses_name' => 'PAPP-A (pregnaney associated plasma protein-A)', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Parietal Cells Abs', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Peptide C', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'pH stool and body fluid', 'global_price' => 2, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phenobarbital', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Phenylketonuria PKU Quantitative by HPLC', 'global_price' => 60, 'discipline' => 'Urine', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phenylalanine', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phenytoin', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Philadelphia Chromosome Analysis, FISH', 'global_price' => 160, 'discipline' => 'Cytogenetic', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Philadelphia Chromosome by PCR real time.', 'global_price' => 240, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phospholipid Ab IgG', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phospholipid Ab IgM', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Phosphorus', 'global_price' => 3, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Platelets Function Test-ADP test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Function Test-ASPI test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Function Test - Collagen test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Function Test - RISTO confirm test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Function Test - RISTO test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Function Test-TRAP test', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام'],
            ['lab_analyses_name' => 'Platelets Rich Plasma', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Porphyrin Total in urine', 'global_price' => 32, 'discipline' => 'Urine', 'preconditions' => 'حماية العينة من الضوء'],
            ['lab_analyses_name' => 'Porphyrins profiles in urine', 'global_price' => 200, 'discipline' => 'Urine', 'preconditions' => 'حماية العينة من الضوء'],
            ['lab_analyses_name' => 'Post Coital Test', 'global_price' => 5, 'discipline' => 'Seminal Fluid', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Potassium', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PRA Identification, HLA Ab Specific Class I', 'global_price' => 240, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PRA Identification, HLA Ab Specific Class II', 'global_price' => 240, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PRA screen (Human leukocyte antibody class I & class II)', 'global_price' => 120, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Prealbumine', 'global_price' => 25, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Pregnancy Test', 'global_price' => 5, 'discipline' => 'Urine', 'preconditions' => 'عينة بول صباحية مركزة'],
            ['lab_analyses_name' => 'Procalcitonin (PCT-Q)', 'global_price' => 40, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Progesterone', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Prolactin', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'الراحة قبل الفحص، تجنب التوتر'],
            ['lab_analyses_name' => 'Protein C Activity', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Protein S Activity', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Protein S Free', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Protein S Total', 'global_price' => 32, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Protein, CSF or Fluids', 'global_price' => 3, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Protein, Total & A/G', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Prothrombin Time', 'global_price' => 8, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Prothrombin Time mix 1:1', 'global_price' => 8, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PSA, Free Prostatic Specific Antigen', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'تجنب الفحص الشرجي قبل الفحص'],
            ['lab_analyses_name' => 'PSA, Prostatic Specific Antigen', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'تجنب الفحص الشرجي قبل الفحص'],
            ['lab_analyses_name' => 'PTH, Parathyroid Hormone', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PTT-LA (Lupus)', 'global_price' => 16, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PTT, Partial Thromboplastin Time', 'global_price' => 8, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'PTT, Partial Thromboplastin Time mix 1:1', 'global_price' => 12, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Pyruvate kinase', 'global_price' => 40, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Pyruvic Acid', 'global_price' => 24, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Quantiferon-TB Gold', 'global_price' => 120, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'RA Test, Rheumatoid Arthritis (Qualitative)', 'global_price' => 2.5, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'RA Test, Rheumatoid Arthritis (Quantitative)', 'global_price' => 8, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Rapid streptococcus test', 'global_price' => 10, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'RBC in urine, Haematuria by phase contrast', 'global_price' => 4, 'discipline' => 'Urine', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Reducing substance in stool', 'global_price' => 3, 'discipline' => 'Stool', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Reducing substance in urine', 'global_price' => 3, 'discipline' => 'Stool', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Renin', 'global_price' => 32, 'discipline' => 'Hormone', 'preconditions' => 'الوضعية العمودية لمدة 30 دقيقة قبل الفحص'],
            ['lab_analyses_name' => 'Reticulocyte Count', 'global_price' => 5, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Rotavirus detection, stool', 'global_price' => 20, 'discipline' => 'Microbiology', 'preconditions' => 'عينة براز طازجة'],
            ['lab_analyses_name' => 'Rubella Ab IgG', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Rubella Ab IgM', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Rubella IgG avidity', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Salicylic Acid', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Selenium', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Seminal Fluid Culture.', 'global_price' => 20, 'discipline' => 'Microbiology', 'preconditions' => 'الامتناع عن القذف 2-5 أيام'],
            ['lab_analyses_name' => 'Serotonin By HPLC', 'global_price' => 80, 'discipline' => 'Chemistry', 'preconditions' => 'تجنب الأطعمة الغنية بالسيروتونين قبل 3 أيام'],
            ['lab_analyses_name' => 'Sex Hormone-Binding Globulin (SHBG)', 'global_price' => 32, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sickle Cells', 'global_price' => 2, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sirolimus', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'SLA, Soluble Liver Antigen', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Smooth Muscle Ab (ASMA)', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sodium', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sperm Ab Total Eliza Blood', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sperm Activation & Concentration', 'global_price' => 50, 'discipline' => 'Seminal Fluid', 'preconditions' => 'الامتناع عن القذف 2-5 أيام'],
            ['lab_analyses_name' => 'Sperm IgA Ab (MAR)', 'global_price' => 20, 'discipline' => 'Seminal Fluid', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sperm IgG Ab (MAR)', 'global_price' => 20, 'discipline' => 'Seminal Fluid', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Spermogram (automated examination)', 'global_price' => 12, 'discipline' => 'Seminal Fluid', 'preconditions' => 'الامتناع عن القذف 2-5 أيام، تسليم العينة خلال ساعة'],
            ['lab_analyses_name' => 'Spermogram (manual examination)', 'global_price' => 10, 'discipline' => 'Seminal Fluid', 'preconditions' => 'الامتناع عن القذف 2-5 أيام، تسليم العينة خلال ساعة'],
            ['lab_analyses_name' => 'Spermogram (seminal morphology)', 'global_price' => 8, 'discipline' => 'Seminal fluid', 'preconditions' => 'الامتناع عن القذف 2-5 أيام، تسليم العينة خلال ساعة'],
            ['lab_analyses_name' => 'SS-A/Ro Autoantibodies', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'SS-B/La Autoantibodies', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Exterase', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Periodic Acid (Schiff)', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Peroxidase', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Sudan Black', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Titan Immunofixation.', 'global_price' => 16, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stain, Titan Silver Gel', 'global_price' => 24, 'discipline' => 'Haematology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stone Analysis', 'global_price' => 8, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stool Analysis', 'global_price' => 5, 'discipline' => 'Stool', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Stool Culture', 'global_price' => 20, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Sweat Test - Automated', 'global_price' => 80, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Syphilis IgG or IgM, (EIA) or (FTA)', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'T3, Free Trifodothyronine', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'T3, Trifodothyronine', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'T4, Free Thyroxine', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'T4, Thyroxine', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Tacrolimus (Prograf)', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Tandem Mass Spectrometry Metabolic Screen', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Testosterone', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'عينة الصباح (7-10 صباحاً)'],
            ['lab_analyses_name' => 'Testosterone, Free', 'global_price' => 20, 'discipline' => 'Hormone', 'preconditions' => 'عينة الصباح (7-10 صباحاً)'],
            ['lab_analyses_name' => 'Theophylline', 'global_price' => 40, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Thrombin time TT', 'global_price' => 16, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Thyroglobulin', 'global_price' => 20, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Thyroglobulin Ab, Anti TG', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Thyroid Microsomal Ab, TPO', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'TIBC, Total Iron Binding Capacity', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'عينة الصباح، الصيام 12 ساعة'],
            ['lab_analyses_name' => 'TNF-alpha, Tumour Necrosis Factor alpha', 'global_price' => 32, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Toxoplasma Antibody IgG Avidity', 'global_price' => 50, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Toxoplasmose Ab total (DA)', 'global_price' => 10, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Toxoplasmose Ab IgG', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Toxoplasmose Ab IgM', 'global_price' => 16, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Toxoplasmosis detection by PCR', 'global_price' => 120, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'TPHA, Treponema Pallidum - IHA', 'global_price' => 10, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Transferrin', 'global_price' => 20, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Transferring saturation (iron + TIBC)', 'global_price' => 12, 'discipline' => 'Chemistry', 'preconditions' => 'عينة الصباح، الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Transglutaminase Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Transglutaminase IgA Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Transglutaminase IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Triglycerides', 'global_price' => 5, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Trisonny 21 Analysis, FISH', 'global_price' => 160, 'discipline' => 'Cytogenetic', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Troponin I or T', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Trypsin Activity (X-Ray Film)', 'global_price' => 5, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'TSH neonatal', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'TSH, Thyroid Stimulating Hormone', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'TSI, TSH Receptors', 'global_price' => 50, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Tuberculin Skin Test', 'global_price' => 5, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Urate (Uric Acid)', 'global_price' => 4, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Urea', 'global_price' => 4, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Urethral Discharge Smear', 'global_price' => 3, 'discipline' => 'Microbiology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Urinalysis', 'global_price' => 4, 'discipline' => 'Urine', 'preconditions' => 'عينة بول صباحية متوسطة'],
            ['lab_analyses_name' => 'Valoproic Acid (Depakene)', 'global_price' => 20, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Vancomycin', 'global_price' => 32, 'discipline' => 'Drug', 'preconditions' => 'تسجيل وقت آخر جرعة'],
            ['lab_analyses_name' => 'Varicella IgG Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Varicella IgM Ab', 'global_price' => 24, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'VDRL or RPR', 'global_price' => 3, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Virial CSF Meningitis detection By PCR', 'global_price' => 160, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Vitamin A by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة، حماية العينة من الضوء'],
            ['lab_analyses_name' => 'Vitamin B1 by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Vitamin B12', 'global_price' => 24, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Vitamin B6 by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Vitamin E by HPLC', 'global_price' => 60, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة، حماية العينة من الضوء'],
            ['lab_analyses_name' => 'VMA with HVA & SHIAA Profile by HPLC', 'global_price' => 60, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة مع حمض'],
            ['lab_analyses_name' => 'VMA, Vanillymandelic Acid', 'global_price' => 24, 'discipline' => 'Urine', 'preconditions' => 'جمع بول 24 ساعة مع حمض'],
            ['lab_analyses_name' => 'Von Willebrand Factor (vWF)', 'global_price' => 24, 'discipline' => 'Coagulation', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Widal Test', 'global_price' => 8, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Wright Test after 2-ME IgM', 'global_price' => 8, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Wright Test', 'global_price' => 8, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Xylose, D Dose Charges by gram', 'global_price' => 1, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Xylose, D', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'الصيام 12 ساعة'],
            ['lab_analyses_name' => 'Yersiniosis Serological Test', 'global_price' => 10, 'discipline' => 'Serology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'Zinc', 'global_price' => 10, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'α Thalassemia By PCR', 'global_price' => 260, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'α1 Antitrypsin', 'global_price' => 16, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'α2 Macroglobulin', 'global_price' => 24, 'discipline' => 'Chemistry', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β Crosslaps (β CTX)', 'global_price' => 40, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β HCG, human Chorionic Gonadotropin', 'global_price' => 16, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β HCG free (Free Human Chorionic Gonadotropin)', 'global_price' => 24, 'discipline' => 'Hormone', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β Thalassemia (BTH) by PCR in amniotic fluid', 'global_price' => 280, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β Thalassemia (BTH) by PCR in blood', 'global_price' => 240, 'discipline' => 'M. Biology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β- Glycoprotein IgG', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β- Glycoprotein IgM', 'global_price' => 32, 'discipline' => 'Immunology', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β- Microglobulin', 'global_price' => 24, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
            ['lab_analyses_name' => 'β- Microglobulin urine', 'global_price' => 32, 'discipline' => 'Marker', 'preconditions' => 'لا يوجد'],
        ];
        $translationDict = [
            'لا يوجد' => 'None',
            'جمع بول 24 ساعة مع مادة حافظة' => 'Collect 24-hour urine with preservative',
            'يفضل عينة الصباح (7-9 صباحاً)' => 'Preferred morning sample (7-9 AM)',
            'تجنب الأطعمة الغنية بالسيروتونين (الموز، الجوز، الطماطم) لمدة 3 أيام قبل الفحص' => 'Avoid serotonin-rich foods (bananas, walnuts, tomatoes) for 3 days before test',
            'عينة الصباح، الصيام، والحفاظ على العينة باردة' => 'Morning sample, fasting, and keep sample cold',
            'إيقاف مضادات التخثر 7 أيام قبل الفحص' => 'Discontinue anticoagulants 7 days prior to test',
            'تجنب الفحص الشرجي قبل الفحص' => 'Avoid rectal exam before test',
            'أخذ العينة قبل إعطاء المضادات الحيوية' => 'Collect sample before administering antibiotics',
            'عينة دم شرياني، تبريد العينة فوراً' => 'Arterial blood sample, chill immediately',
            'تسجيل وقت آخر جرعة' => 'Record time of last dose',
            'عينة دم شرياني، نقل العينة بسرعة' => 'Arterial blood sample, transport quickly',
            'الصيام 12 ساعة' => 'Fasting 12 hours required',
            'حفظ العينة دافئة أثناء النقل' => 'Keep sample warm during transport',
            'الامتناع عن القذف 2-5 أيام' => 'Abstain from ejaculation for 2-5 days',
            'تسليم العينة خلال ساعة' => 'Deliver sample within 1 hour',
            'عينة بول مركزة (الصباح الأول)' => 'First-morning concentrated urine sample',
            'تجنب العلاجات المهبلية قبل 48 ساعة' => 'Avoid vaginal treatments 48 hours prior',
            'الوضعية العمودية لمدة 30 دقيقة قبل الفحص' => 'Upright position for 30 minutes before test',
            'الراحة قبل الفحص، تجنب التوتر' => 'Rest before test, avoid stress',
            'أخذ العينة أثناء نوبة الحمى' => 'Collect sample during fever episode',
            'حماية العينة من الضوء' => 'Protect sample from light',
            'عينة براز طازجة' => 'Fresh stool sample required',
            'عينة بول صباحية متوسطة' => 'Mid-stream morning urine sample',
            'تجنب تناول اللحوم الحمراء قبل 3 أيام' => 'Avoid red meat for 3 days prior',
            'الراحة قبل الفحص، عدم ربط الذراع' => 'Rest before test, no arm constriction',
            'الصيام 8 ساعات للنتائج الدقيقة' => 'Fast 8 hours for accurate results',
            'عدم التدخين خلال الفحص' => 'No smoking during test',
            'تجنب التمارين الشاقة قبل الفحص' => 'Avoid strenuous exercise before test',
            'تجنب التعرض للضوء الساطع' => 'Avoid bright light exposure',
            'تجنب استخدام مضادات التعرق قبل الفحص' => 'Avoid antiperspirants before test',
            'الجلوس لمدة 30 دقيقة قبل سحب العينة' => 'Sit for 30 minutes before sample collection',
            'عدم استخدام مضادات الحموضة قبل الفحص' => 'Avoid antacids before test',
            'إيقاف الأدوية المضادة للصفيحات قبل 7 أيام' => 'Discontinue antiplatelet drugs 7 days prior',
            'الوضعية العمودية لمدة 30 دقيقة قبل الفحص' => 'Maintain upright position for 30 minutes before test',
            'الامتناع عن القذف 2-5 أيام، تسليم العينة خلال ساعة' => 'Abstain from ejaculation 2-5 days, deliver sample within 1 hour',
            'جمع بول 24 ساعة' => '24-hour urine collection',
            'جمع بول 24 ساعة مع حمض' => '24-hour urine collection with acid',
            'عينة بول صباحية مركزة' => 'First-morning concentrated urine',
            'عينة الصباح، الصيام 12 ساعة' => 'Morning sample, fasting 12 hours required',
            'عينة الصباح (7-10 صباحاً)' => 'Preferred morning sample (7-10 AM)',
            'تجنب الأطعمة الغنية بالسيروتونين قبل 3 أيام' => 'Avoid serotonin-rich foods for 3 days before test',
            'جمع بول 24 ساعة أو عينة بول صباحية' => '24-hour urine collection or morning urine sample',
            'الصيام 6 ساعات، عدم استخدام مضادات الحموضة قبل الفحص' => 'Fast 6 hours, avoid antacids before test',
            'الصيام 12 ساعة، الراحة قبل الفحص' => 'Fasting 12 hours, rest before test',
            'عينة الصباح (7-9 صباحاً)' => 'Preferred morning sample (7-9 AM)',
            'تجنب التوتر والتمارين الشاقة قبل الفحص' => 'Avoid stress and strenuous exercise before test',
            'يفضل الجلوس لمدة 30 دقيقة قبل سحب العينة' => 'Preferably sit for 30 minutes before sample collection',
            'تجنب الشوكولاتة، القهوة، الموز قبل الفحص' => 'Avoid chocolate, coffee, bananas before test',
            'عينة طازجة غير مجمدة' => 'Fresh sample, not frozen',
            'الصيام 12 ساعة، حماية العينة من الضوء' => 'Fasting 12 hours required, protect sample from light',
            'الصيام 8-12 ساعة قبل الفحص، عدم التدخين خلال الفحص' => 'Fast 8-12 hours before test, no smoking during test'
        ];
        foreach ($labAnalyses2 as $labAnalys) {
            if (isset($translationDict[$labAnalys['preconditions']])) {
                $labAnalys['preconditions'] = $translationDict[$labAnalys['preconditions']];
            } else {
                $labAnalys['preconditions'] = "None";
            }
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
        foreach ($ranges as $rang) {
            Range::create($rang);
        }
    }
}
