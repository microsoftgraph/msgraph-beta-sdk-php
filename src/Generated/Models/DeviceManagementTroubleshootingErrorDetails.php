<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTroubleshootingErrorDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $context Not yet documented
    */
    private ?string $context = null;
    
    /**
     * @var string|null $failure Not yet documented
    */
    private ?string $failure = null;
    
    /**
     * @var string|null $failureDetails The detailed description of what went wrong.
    */
    private ?string $failureDetails = null;
    
    /**
     * @var string|null $remediation The detailed description of how to remediate this issue.
    */
    private ?string $remediation = null;
    
    /**
     * @var array<DeviceManagementTroubleshootingErrorResource>|null $resources Links to helpful documentation about this failure.
    */
    private ?array $resources = null;
    
    /**
     * Instantiates a new deviceManagementTroubleshootingErrorDetails and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTroubleshootingErrorDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTroubleshootingErrorDetails {
        return new DeviceManagementTroubleshootingErrorDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the context property value. Not yet documented
     * @return string|null
    */
    public function getContext(): ?string {
        return $this->context;
    }

    /**
     * Gets the failure property value. Not yet documented
     * @return string|null
    */
    public function getFailure(): ?string {
        return $this->failure;
    }

    /**
     * Gets the failureDetails property value. The detailed description of what went wrong.
     * @return string|null
    */
    public function getFailureDetails(): ?string {
        return $this->failureDetails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'context' => function (ParseNode $n) use ($o) { $o->setContext($n->getStringValue()); },
            'failure' => function (ParseNode $n) use ($o) { $o->setFailure($n->getStringValue()); },
            'failureDetails' => function (ParseNode $n) use ($o) { $o->setFailureDetails($n->getStringValue()); },
            'remediation' => function (ParseNode $n) use ($o) { $o->setRemediation($n->getStringValue()); },
            'resources' => function (ParseNode $n) use ($o) { $o->setResources($n->getCollectionOfObjectValues(array(DeviceManagementTroubleshootingErrorResource::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the remediation property value. The detailed description of how to remediate this issue.
     * @return string|null
    */
    public function getRemediation(): ?string {
        return $this->remediation;
    }

    /**
     * Gets the resources property value. Links to helpful documentation about this failure.
     * @return array<DeviceManagementTroubleshootingErrorResource>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('context', $this->context);
        $writer->writeStringValue('failure', $this->failure);
        $writer->writeStringValue('failureDetails', $this->failureDetails);
        $writer->writeStringValue('remediation', $this->remediation);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
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
     * Sets the context property value. Not yet documented
     *  @param string|null $value Value to set for the context property.
    */
    public function setContext(?string $value ): void {
        $this->context = $value;
    }

    /**
     * Sets the failure property value. Not yet documented
     *  @param string|null $value Value to set for the failure property.
    */
    public function setFailure(?string $value ): void {
        $this->failure = $value;
    }

    /**
     * Sets the failureDetails property value. The detailed description of what went wrong.
     *  @param string|null $value Value to set for the failureDetails property.
    */
    public function setFailureDetails(?string $value ): void {
        $this->failureDetails = $value;
    }

    /**
     * Sets the remediation property value. The detailed description of how to remediate this issue.
     *  @param string|null $value Value to set for the remediation property.
    */
    public function setRemediation(?string $value ): void {
        $this->remediation = $value;
    }

    /**
     * Sets the resources property value. Links to helpful documentation about this failure.
     *  @param array<DeviceManagementTroubleshootingErrorResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

}
