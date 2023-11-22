setwd('C:\\users\\mohamedhabashy\\downloads')
library(readr)
library(readxl)
library(R2wd)
wdGet()
bio_ar <- read_xlsx('bio_ar.xlsx',skip = 30, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
bio_ar <- bio_ar[, c('seat_n', 'name', 'gpa')]
bio_ar_less_2 <- bio_ar[which(bio_ar$gpa<2.0), ] 
wdTable(bio_ar_less_2)
#################
bio_eng <- read_xlsx('bio_eng.xlsx',skip = 20, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
bio_eng <- bio_eng[, c('seat_n', 'name', 'gpa')]
bio_eng_less_2 <- bio_eng[which(bio_eng$gpa<2.0), ] 
wdTable(bio_eng_less_2)
###################
math_ar <- read_xlsx('math_ar.xlsx',skip = 20, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
math_ar <- math_ar[, c('seat_n', 'name', 'gpa')]
math_ar_less_2 <- math_ar[which(math_ar$gpa<2.0), ] 
wdTable(math_ar_less_2)
#########################################
math_eng <- read_xlsx('math_eng.xlsx',skip = 20, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
math_eng <- math_eng[, c('seat_n', 'name', 'gpa')]
math_eng_less_2 <- math_eng[which(math_eng$gpa<2.0), ] 
wdTable(math_eng_less_2)
###########################
physics <- read_xlsx('physics.xlsx',skip = 19, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
physics <- physics[, c('seat_n', 'name', 'gpa')]
physics_less_2 <- physics[which(physics$gpa<2.0), ] 
wdTable(physics_less_2)
#################
chem_eng <- read_xlsx('chem_eng.xlsx',skip = 19, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
chem_eng <- chem_eng[, c('seat_n', 'name', 'gpa')]
chem_eng_less_2 <- chem_eng[which(chem_eng$gpa<2.0), ] 
wdTable(chem_eng_less_2)
#################
chem_ar <- read_xlsx('chem_ar.xlsx',skip = 19, col_names = c('c', 'gpa', 'b', 'a', 'name','seat_n'))
chem_ar <- chem_ar[, c('seat_n', 'name', 'gpa')]
chem_ar_less_2 <- chem_ar[which(chem_ar$gpa<2.0), ] 
wdTable(chem_ar_less_2)
