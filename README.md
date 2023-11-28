# GTS_TEST
The entrance exam for Wales University focuses on assessing overall abilities. It involves a two-stage selection process based on the results of the initial examination that covers five subjects: English, Mathematics, Science, Urdu, and Geography/History, each with a maximum score of 100 points. To pass the selection process, applicants must meet the following conditions in both stages.
A total score of 350 points or more in all subjects
Science applicants must have a total score of 160 or higher in two science subjects (mathematics and science)
Humanities applicants must have a total score of 160 or higher in two humanities subjects (Urdu, Geography/History)
Since the score of each subject of each examinee is entered, please find how many people can pass the two-stage selection.
This explanation corresponds to example input 1 in the test.
Examinee 2 has a total of 350 points or more in all subjects, but the total of two humanities subjects is less than 160 points, so the examinee failed. On the other hand, for examinee 4, they have a total of 160 points or more in two science subjects, but their overall total is less than 350 points so they fail the admission test.
→ Number of Passers: 2
Value to be entered
Input is given in the following format:
N
t_1 e_1 m_1 s_1 u_1 g_1
t_2 e_2 m_2 s_2 u_2 g_2
...
t_N e_N m_N s_N u_N g_N
Each value is passed as a string from standard input. Please check here for how to get the value from the standard input
Expected output
Please print in one line as an integer how many people can pass the two-step selection of the Wales University entrance examination.
End with a line break and do not include extra characters or blank lines.
Conditions
All test cases satisfy the following conditions.
Input example 1
5
s 70 78 82 57 74
l 68 81 81 60 78
s 63 76 55 80 75
s 90 100 96 10 10
l 88 78 81 97 93
Output example 1
2
Input example 2
20
l 100 67 39 85 87
s 38 75 75 45 90
l 43 95 7 35 49
l 82 77 74 35 44
s 96 80 92 58 84
l 23 60 44 27 3
l 42 24 52 23 63
s 44 78 98 51 10
l 93 38 73 88 12
l 34 29 43 48 61
l 83 33 97 3 59
l 24 84 22 35 33
s 81 42 80 34 87
l 8 87 82 80 100
l 48 75 75 3 50
l 93 76 25 71 31
s 60 92 64 66 11
l 61 47 6 21 83
l 68 1 47 81 78
l 8 72 54 20 25
Output example 2
3
Additional Information
Please use a programming language you feel most comfortable completing this test.
Any type of GUI is acceptable.
