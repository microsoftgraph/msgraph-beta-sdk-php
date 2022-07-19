<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceComplianceLocalActionBase extends Entity implements Parsable 
{
    /**
     * @var int|null $gracePeriodInMinutes Number of minutes to wait till a local action is enforced. Valid values 0 to 2147483647
    */
    private ?int $gracePeriodInMinutes = null;
    
    /**
     * Instantiates a new AndroidDeviceComplianceLocalActionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceComplianceLocalActionBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceComplianceLocalActionBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceComplianceLocalActionBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidDeviceComplianceLocalActionLockDevice': return new AndroidDeviceComplianceLocalActionLockDevice();
                case '#microsoft.graph.androidDeviceComplianceLocalActionLockDeviceWithPasscode': return new AndroidDeviceComplianceLocalActionLockDeviceWithPasscode();
            }
        }
        return new AndroidDeviceComplianceLocalActionBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'gracePeriodInMinutes' => function (ParseNode $n) use ($o) { $o->setGracePeriodInMinutes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the gracePeriodInMinutes property value. Number of minutes to wait till a local action is enforced. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getGracePeriodInMinutes(): ?int {
        return $this->gracePeriodInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('gracePeriodInMinutes', $this->gracePeriodInMinutes);
    }

    /**
     * Sets the gracePeriodInMinutes property value. Number of minutes to wait till a local action is enforced. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the gracePeriodInMinutes property.
    */
    public function setGracePeriodInMinutes(?int $value ): void {
        $this->gracePeriodInMinutes = $value;
    }

}
