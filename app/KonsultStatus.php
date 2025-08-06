<?php

namespace App;

enum KonsultStatus: string
{
    case Pending = "pending";
    case Confirmed = "confirm";
    case Cancelled = "cancel";
}
