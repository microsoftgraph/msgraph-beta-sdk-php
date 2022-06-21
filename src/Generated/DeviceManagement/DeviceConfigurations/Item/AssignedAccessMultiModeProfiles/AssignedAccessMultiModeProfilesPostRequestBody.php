<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\AssignedAccessMultiModeProfiles;

use Microsoft\Graph\Beta\Generated\Models\WindowsAssignedAccessProfile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedAccessMultiModeProfilesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<WindowsAssignedAccessProfile>|null $assignedAccessMultiModeProfiles The assignedAccessMultiModeProfiles property
    */
    private ?array $assignedAccessMultiModeProfiles = null;
    
    /**
     * Instantiates a new assignedAccessMultiModeProfilesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedAccessMultiModeProfilesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedAccessMultiModeProfilesPostRequestBody {
        return new AssignedAccessMultiModeProfilesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedAccessMultiModeProfiles property value. The assignedAccessMultiModeProfiles property
     * @return array<WindowsAssignedAccessProfile>|null
    */
    public function getAssignedAccessMultiModeProfiles(): ?array {
        return $this->assignedAccessMultiModeProfiles;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedAccessMultiModeProfiles' => function (ParseNode $n) use ($o) { $o->setAssignedAccessMultiModeProfiles($n->getCollectionOfObjectValues(array(WindowsAssignedAccessProfile::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assignedAccessMultiModeProfiles', $this->assignedAccessMultiModeProfiles);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assignedAccessMultiModeProfiles property value. The assignedAccessMultiModeProfiles property
     *  @param array<WindowsAssignedAccessProfile>|null $value Value to set for the assignedAccessMultiModeProfiles property.
    */
    public function setAssignedAccessMultiModeProfiles(?array $value ): void {
        $this->assignedAccessMultiModeProfiles = $value;
    }

}
