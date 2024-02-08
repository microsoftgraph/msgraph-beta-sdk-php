<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class GoalsExportJob extends LongRunningOperation implements Parsable 
{
    /**
     * Instantiates a new GoalsExportJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GoalsExportJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GoalsExportJob {
        return new GoalsExportJob();
    }

    /**
     * Gets the content property value. The content of the goalsExportJob.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time of expiry of the result of the operation.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * Gets the explorerViewId property value. The unique identifier of the explorer view to be exported.
     * @return string|null
    */
    public function getExplorerViewId(): ?string {
        $val = $this->getBackingStore()->get('explorerViewId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'explorerViewId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'explorerViewId' => fn(ParseNode $n) => $o->setExplorerViewId($n->getStringValue()),
            'goalsOrganizationId' => fn(ParseNode $n) => $o->setGoalsOrganizationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the goalsOrganizationId property value. The unique identifier of the viva goals organization.
     * @return string|null
    */
    public function getGoalsOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('goalsOrganizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'goalsOrganizationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('explorerViewId', $this->getExplorerViewId());
        $writer->writeStringValue('goalsOrganizationId', $this->getGoalsOrganizationId());
    }

    /**
     * Sets the content property value. The content of the goalsExportJob.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time of expiry of the result of the operation.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the explorerViewId property value. The unique identifier of the explorer view to be exported.
     * @param string|null $value Value to set for the explorerViewId property.
    */
    public function setExplorerViewId(?string $value): void {
        $this->getBackingStore()->set('explorerViewId', $value);
    }

    /**
     * Sets the goalsOrganizationId property value. The unique identifier of the viva goals organization.
     * @param string|null $value Value to set for the goalsOrganizationId property.
    */
    public function setGoalsOrganizationId(?string $value): void {
        $this->getBackingStore()->set('goalsOrganizationId', $value);
    }

}
