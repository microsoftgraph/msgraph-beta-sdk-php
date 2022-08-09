<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingHistoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $occurrenceDateTime Time when the history item occurred.
    */
    private ?DateTime $occurrenceDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DeviceManagementTroubleshootingErrorDetails|null $troubleshootingErrorDetails Object containing detailed information about the error and its remediation.
    */
    private ?DeviceManagementTroubleshootingErrorDetails $troubleshootingErrorDetails = null;
    
    /**
     * Instantiates a new mobileAppTroubleshootingHistoryItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppTroubleshootingHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingHistoryItem {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mobileAppTroubleshootingAppPolicyCreationHistory': return new MobileAppTroubleshootingAppPolicyCreationHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppStateHistory': return new MobileAppTroubleshootingAppStateHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppTargetHistory': return new MobileAppTroubleshootingAppTargetHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppUpdateHistory': return new MobileAppTroubleshootingAppUpdateHistory();
                case '#microsoft.graph.mobileAppTroubleshootingDeviceCheckinHistory': return new MobileAppTroubleshootingDeviceCheckinHistory();
            }
        }
        return new MobileAppTroubleshootingHistoryItem();
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
            'occurrenceDateTime' => function (ParseNode $n) use ($o) { $o->setOccurrenceDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'troubleshootingErrorDetails' => function (ParseNode $n) use ($o) { $o->setTroubleshootingErrorDetails($n->getObjectValue(array(DeviceManagementTroubleshootingErrorDetails::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the occurrenceDateTime property value. Time when the history item occurred.
     * @return DateTime|null
    */
    public function getOccurrenceDateTime(): ?DateTime {
        return $this->occurrenceDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @return DeviceManagementTroubleshootingErrorDetails|null
    */
    public function getTroubleshootingErrorDetails(): ?DeviceManagementTroubleshootingErrorDetails {
        return $this->troubleshootingErrorDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('occurrenceDateTime', $this->occurrenceDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('troubleshootingErrorDetails', $this->troubleshootingErrorDetails);
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
     * Sets the occurrenceDateTime property value. Time when the history item occurred.
     *  @param DateTime|null $value Value to set for the occurrenceDateTime property.
    */
    public function setOccurrenceDateTime(?DateTime $value ): void {
        $this->occurrenceDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     *  @param DeviceManagementTroubleshootingErrorDetails|null $value Value to set for the troubleshootingErrorDetails property.
    */
    public function setTroubleshootingErrorDetails(?DeviceManagementTroubleshootingErrorDetails $value ): void {
        $this->troubleshootingErrorDetails = $value;
    }

}
