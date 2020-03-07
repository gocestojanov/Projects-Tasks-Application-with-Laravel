<div class="tile">
    <div class="tile is-3 is-vertical">
      <div class="tile">
        <!-- Top tile -->

            <aside class="menu">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                <li><a class="is-active">Dashboard</a></li>
                <li><a href="/projects">Projects</a></li>
                </ul>
                <p class="menu-label">
                Administration
                </p>
                {{-- <ul class="menu-list">
                <li><a>Team Settings</a></li>
                <li>
                    <a class="is-active">Manage Your Team</a>
                    <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                    </ul>
                </li>
                <li><a>Invitations</a></li>
                <li><a>Cloud Storage Environment Settings</a></li>
                <li><a>Authentication</a></li>
                </ul> --}}
                <p class="menu-label">
                Transactions
                </p>
                {{-- <ul class="menu-list">
                <li><a>Payments</a></li>
                <li><a>Transfers</a></li>
                <li><a>Balance</a></li>
                </ul> --}}
            </aside>
        </div>
    </div>
    <div class="tile">
      <!-- This tile will take up the whole vertical space -->
      {{ $slot }}
    </div>
  </div>
