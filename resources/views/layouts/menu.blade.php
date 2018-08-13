<li class="{{ Request::is('addresses*') ? 'active' : '' }}">
    <a href="{!! route('admincp.crm.addresses.index') !!}"><i class="fa fa-edit"></i><span>Addresses</span></a>
</li>

<li class="{{ Request::is('calendarItems*') ? 'active' : '' }}">
    <a href="{!! route('admincp.calendar.calendarItems.index') !!}"><i class="fa fa-edit"></i><span>Calendar Items</span></a>
</li>

<li class="{{ Request::is('companyStaffs*') ? 'active' : '' }}">
    <a href="{!! route('admincp.core.companyStaffs.index') !!}"><i class="fa fa-edit"></i><span>Company Staffs</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('admincp.crm.customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('admincp.hrm.employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('projectCustomerRoles*') ? 'active' : '' }}">
    <a href="{!! route('admincp.projects.projectCustomerRoles.index') !!}"><i class="fa fa-edit"></i><span>Project Customer Roles</span></a>
</li>

<li class="{{ Request::is('projectRelations*') ? 'active' : '' }}">
    <a href="{!! route('admincp.projects.projectRelations.index') !!}"><i class="fa fa-edit"></i><span>Project Relations</span></a>
</li>

<li class="{{ Request::is('projectRoles*') ? 'active' : '' }}">
    <a href="{!! route('admincp.projects.projectRoles.index') !!}"><i class="fa fa-edit"></i><span>Project Roles</span></a>
</li>

<li class="{{ Request::is('projectTasks*') ? 'active' : '' }}">
    <a href="{!! route('admincp.projects.projectTasks.index') !!}"><i class="fa fa-edit"></i><span>Project Tasks</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('admincp.projects.projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('relations*') ? 'active' : '' }}">
    <a href="{!! route('admincp.crm.relations.index') !!}"><i class="fa fa-edit"></i><span>Relations</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('admincp.core.roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

