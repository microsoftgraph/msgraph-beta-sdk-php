<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppAssignmentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new mobileAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppAssignmentSettings {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedStoreAppAssignmentSettings': return new AndroidManagedStoreAppAssignmentSettings();
                case '#microsoft.graph.iosLobAppAssignmentSettings': return new IosLobAppAssignmentSettings();
                case '#microsoft.graph.iosStoreAppAssignmentSettings': return new IosStoreAppAssignmentSettings();
                case '#microsoft.graph.iosVppAppAssignmentSettings': return new IosVppAppAssignmentSettings();
                case '#microsoft.graph.macOsLobAppAssignmentSettings': return new MacOsLobAppAssignmentSettings();
                case '#microsoft.graph.macOsVppAppAssignmentSettings': return new MacOsVppAppAssignmentSettings();
                case '#microsoft.graph.microsoftStoreForBusinessAppAssignmentSettings': return new MicrosoftStoreForBusinessAppAssignmentSettings();
                case '#microsoft.graph.win32LobAppAssignmentSettings': return new Win32LobAppAssignmentSettings();
                case '#microsoft.graph.windowsAppXAppAssignmentSettings': return new WindowsAppXAppAssignmentSettings();
                case '#microsoft.graph.windowsUniversalAppXAppAssignmentSettings': return new WindowsUniversalAppXAppAssignmentSettings();
            }
        }
        return new MobileAppAssignmentSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
