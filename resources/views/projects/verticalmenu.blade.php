
        <div class="columns">
            <div class="column is-one-fifth">
                <aside class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                    <li><a id="link1" class="{{ request('active1') ? 'is-active' : '' }}" href="/home?active1=yes" >Dashboard</a></li>
                    <li><a id="link2" class="{{ request('active2') ? 'is-active' : '' }}" href="/projects?active2=yes">Projects</a></li>
                    <li><a id="link3" class="{{ request('active3') ? 'is-active' : '' }}" href="/projects/create?active3=yes" >Create Project</a></li>
                    </ul>
                    <p class="menu-label">
                    Administration 2
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
            <div class="column">
                {{ $slot }}
            </div>

        </div>



