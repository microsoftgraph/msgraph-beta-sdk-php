<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationSignInSummary extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appDisplayName Name of the application that the user signed into.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var int|null $failedSignInCount Count of failed sign-ins made by the application.
    */
    private ?int $failedSignInCount = null;
    
    /**
     * @var int|null $successfulSignInCount Count of successful sign-ins made by the application.
    */
    private ?int $successfulSignInCount = null;
    
    /**
     * @var float|null $successPercentage Percentage of successful sign-ins made by the application.
    */
    private ?float $successPercentage = null;
    
    /**
     * Instantiates a new ApplicationSignInSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationSignInSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationSignInSummary {
        return new ApplicationSignInSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appDisplayName property value. Name of the application that the user signed into.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the failedSignInCount property value. Count of failed sign-ins made by the application.
     * @return int|null
    */
    public function getFailedSignInCount(): ?int {
        return $this->failedSignInCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'failedSignInCount' => function (ParseNode $n) use ($o) { $o->setFailedSignInCount($n->getIntegerValue()); },
            'successfulSignInCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulSignInCount($n->getIntegerValue()); },
            'successPercentage' => function (ParseNode $n) use ($o) { $o->setSuccessPercentage($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the successfulSignInCount property value. Count of successful sign-ins made by the application.
     * @return int|null
    */
    public function getSuccessfulSignInCount(): ?int {
        return $this->successfulSignInCount;
    }

    /**
     * Gets the successPercentage property value. Percentage of successful sign-ins made by the application.
     * @return float|null
    */
    public function getSuccessPercentage(): ?float {
        return $this->successPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeIntegerValue('failedSignInCount', $this->failedSignInCount);
        $writer->writeIntegerValue('successfulSignInCount', $this->successfulSignInCount);
        $writer->writeFloatValue('successPercentage', $this->successPercentage);
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
     * Sets the appDisplayName property value. Name of the application that the user signed into.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the failedSignInCount property value. Count of failed sign-ins made by the application.
     *  @param int|null $value Value to set for the failedSignInCount property.
    */
    public function setFailedSignInCount(?int $value ): void {
        $this->failedSignInCount = $value;
    }

    /**
     * Sets the successfulSignInCount property value. Count of successful sign-ins made by the application.
     *  @param int|null $value Value to set for the successfulSignInCount property.
    */
    public function setSuccessfulSignInCount(?int $value ): void {
        $this->successfulSignInCount = $value;
    }

    /**
     * Sets the successPercentage property value. Percentage of successful sign-ins made by the application.
     *  @param float|null $value Value to set for the successPercentage property.
    */
    public function setSuccessPercentage(?float $value ): void {
        $this->successPercentage = $value;
    }

}
