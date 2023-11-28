
library(R2wd)
wdGet()
wdTable(data.frame(grp1, grp2, grp3))
#
mean_g <- mean(c(grp1, grp2, grp3))
mean_g1 <- mean(grp1)
mean_g2 <- mean(grp2)
mean_g3 <- mean(grp3)
#############################
ss_be <- 5*((mean_g1-mean_g)^2 +(mean_g2-mean_g)^2+(mean_g3-mean_g)^2)
# 203.3333
ss_t <- (var(c(grp1, grp2, grp3)))*16
# 73.52381
sum((grp1-mean_g1)^2) + sum((grp2-mean_g2)^2)+sum((grp3-mean_g3)^2)
sum((c(grp1, grp2, grp3) -mean_g)^2)
