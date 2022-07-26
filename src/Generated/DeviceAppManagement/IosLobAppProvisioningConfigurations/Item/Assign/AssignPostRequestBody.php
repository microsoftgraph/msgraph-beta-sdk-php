<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\IosLobAppProvisioningConfigurationAssignment;
use Microsoft\Graph\Beta\Generated\Models\MobileAppProvisioningConfigGroupAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<MobileAppProvisioningConfigGroupAssignment>|null $appProvisioningConfigurationGroupAssignments The appProvisioningConfigurationGroupAssignments property
    */
    private ?array $appProvisioningConfigurationGroupAssignments = null;
    
    /**
     * @var array<IosLobAppProvisioningConfigurationAssignment>|null $iOSLobAppProvisioningConfigAssignments The iOSLobAppProvisioningConfigAssignments property
    */
    private ?array $iOSLobAppProvisioningConfigAssignments = null;
    
    /**
     * Instantiates a new assignPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignPostRequestBody {
        return new AssignPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appProvisioningConfigurationGroupAssignments property value. The appProvisioningConfigurationGroupAssignments property
     * @return array<MobileAppProvisioningConfigGroupAssignment>|null
    */
    public function getAppProvisioningConfigurationGroupAssignments(): ?array {
        return $this->appProvisioningConfigurationGroupAssignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appProvisioningConfigurationGroupAssignments' => function (ParseNode $n) use ($o) { $o->setAppProvisioningConfigurationGroupAssignments($n->getCollectionOfObjectValues(array(MobileAppProvisioningConfigGroupAssignment::class, 'createFromDiscriminatorValue'))); },
            'iOSLobAppProvisioningConfigAssignments' => function (ParseNode $n) use ($o) { $o->setIOSLobAppProvisioningConfigAssignments($n->getCollectionOfObjectValues(array(IosLobAppProvisioningConfigurationAssignment::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the iOSLobAppProvisioningConfigAssignments property value. The iOSLobAppProvisioningConfigAssignments property
     * @return array<IosLobAppProvisioningConfigurationAssignment>|null
    */
    public function getIOSLobAppProvisioningConfigAssignments(): ?array {
        return $this->iOSLobAppProvisioningConfigAssignments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('appProvisioningConfigurationGroupAssignments', $this->appProvisioningConfigurationGroupAssignments);
        $writer->writeCollectionOfObjectValues('iOSLobAppProvisioningConfigAssignments', $this->iOSLobAppProvisioningConfigAssignments);
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
     * Sets the appProvisioningConfigurationGroupAssignments property value. The appProvisioningConfigurationGroupAssignments property
     *  @param array<MobileAppProvisioningConfigGroupAssignment>|null $value Value to set for the appProvisioningConfigurationGroupAssignments property.
    */
    public function setAppProvisioningConfigurationGroupAssignments(?array $value ): void {
        $this->appProvisioningConfigurationGroupAssignments = $value;
    }

    /**
     * Sets the iOSLobAppProvisioningConfigAssignments property value. The iOSLobAppProvisioningConfigAssignments property
     *  @param array<IosLobAppProvisioningConfigurationAssignment>|null $value Value to set for the iOSLobAppProvisioningConfigAssignments property.
    */
    public function setIOSLobAppProvisioningConfigAssignments(?array $value ): void {
        $this->iOSLobAppProvisioningConfigAssignments = $value;
    }

}
