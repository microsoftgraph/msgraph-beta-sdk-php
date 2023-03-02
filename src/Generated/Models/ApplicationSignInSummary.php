<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationSignInSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicationSignInSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the appDisplayName property value. Name of the application that the user signed into.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the failedSignInCount property value. Count of failed sign-ins made by the application.
     * @return int|null
    */
    public function getFailedSignInCount(): ?int {
        return $this->getBackingStore()->get('failedSignInCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'failedSignInCount' => fn(ParseNode $n) => $o->setFailedSignInCount($n->getIntegerValue()),
            'successfulSignInCount' => fn(ParseNode $n) => $o->setSuccessfulSignInCount($n->getIntegerValue()),
            'successPercentage' => fn(ParseNode $n) => $o->setSuccessPercentage($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the successfulSignInCount property value. Count of successful sign-ins made by the application.
     * @return int|null
    */
    public function getSuccessfulSignInCount(): ?int {
        return $this->getBackingStore()->get('successfulSignInCount');
    }

    /**
     * Gets the successPercentage property value. Percentage of successful sign-ins made by the application.
     * @return float|null
    */
    public function getSuccessPercentage(): ?float {
        return $this->getBackingStore()->get('successPercentage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeIntegerValue('failedSignInCount', $this->getFailedSignInCount());
        $writer->writeIntegerValue('successfulSignInCount', $this->getSuccessfulSignInCount());
        $writer->writeFloatValue('successPercentage', $this->getSuccessPercentage());
    }

    /**
     * Sets the appDisplayName property value. Name of the application that the user signed into.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the failedSignInCount property value. Count of failed sign-ins made by the application.
     * @param int|null $value Value to set for the failedSignInCount property.
    */
    public function setFailedSignInCount(?int $value): void {
        $this->getBackingStore()->set('failedSignInCount', $value);
    }

    /**
     * Sets the successfulSignInCount property value. Count of successful sign-ins made by the application.
     * @param int|null $value Value to set for the successfulSignInCount property.
    */
    public function setSuccessfulSignInCount(?int $value): void {
        $this->getBackingStore()->set('successfulSignInCount', $value);
    }

    /**
     * Sets the successPercentage property value. Percentage of successful sign-ins made by the application.
     * @param float|null $value Value to set for the successPercentage property.
    */
    public function setSuccessPercentage(?float $value): void {
        $this->getBackingStore()->set('successPercentage', $value);
    }

}
