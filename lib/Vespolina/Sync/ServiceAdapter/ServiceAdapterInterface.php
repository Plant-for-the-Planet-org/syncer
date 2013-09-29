<?php

/**
 * (c) 2011 - ∞ Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\Sync\ServiceAdapter;


/**
 * An interface to manage a remote service
 *
 * @author Daniel Kucharski <daniel@vespolina.org>
 */
interface ServiceAdapterInterface
{
    function fetchEntities($lastValue, $packageSize);

    function supportsEntity($entityName);

    function getSupportedEntities();
}
