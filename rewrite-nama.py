def commit_callback(commit):
    old_names = [b"Muhammad Hatim", b"Ningrum Damayanti"]
    old_emails = [b"hatimalfirouz@gmail.com", b"hensukiningrum@gmail.com"]

    if commit.author_name in old_names:
        commit.author_name = b"Abu Hanifah"
    if commit.author_email in old_emails:
        commit.author_email = b"hanifah.abu2@gmail.com"

    if commit.committer_name in old_names:
        commit.committer_name = b"Abu Hanifah"
    if commit.committer_email in old_emails:
        commit.committer_email = b"hanifah.abu2@gmail.com"
