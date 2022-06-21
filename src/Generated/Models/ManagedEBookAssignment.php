<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedEBookAssignment extends Entity implements Parsable 
{
    /**
     * @var InstallIntent|null $installIntent The install intent for eBook. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    */
    private ?InstallIntent $installIntent = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target The assignment target for eBook.
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new managedEBookAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedEBookAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedEBookAssignment {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosVppEBookAssignment': return new IosVppEBookAssignment();
            }
        }
        return new ManagedEBookAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'installIntent' => function (ParseNode $n) use ($o) { $o->setInstallIntent($n->getEnumValue(InstallIntent::class)); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the installIntent property value. The install intent for eBook. Possible values are: available, required, uninstall, availableWithoutEnrollment.
     * @return InstallIntent|null
    */
    public function getInstallIntent(): ?InstallIntent {
        return $this->installIntent;
    }

    /**
     * Gets the target property value. The assignment target for eBook.
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('installIntent', $this->installIntent);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the installIntent property value. The install intent for eBook. Possible values are: available, required, uninstall, availableWithoutEnrollment.
     *  @param InstallIntent|null $value Value to set for the installIntent property.
    */
    public function setInstallIntent(?InstallIntent $value ): void {
        $this->installIntent = $value;
    }

    /**
     * Sets the target property value. The assignment target for eBook.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
