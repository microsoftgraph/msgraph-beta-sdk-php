<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Properties related to macOS-specific configured and Intune-managed local administrator account
*/
class MacOSDeviceLocalAdminAccountDetail extends DeviceLocalAdminAccountDetail implements Parsable 
{
    /**
     * Instantiates a new MacOSDeviceLocalAdminAccountDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSDeviceLocalAdminAccountDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSDeviceLocalAdminAccountDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSDeviceLocalAdminAccountDetail {
        return new MacOSDeviceLocalAdminAccountDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
