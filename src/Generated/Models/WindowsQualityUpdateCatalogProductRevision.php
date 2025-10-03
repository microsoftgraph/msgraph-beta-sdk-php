<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The operating system product revisions that are released as part of this quality update.
*/
class WindowsQualityUpdateCatalogProductRevision implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsQualityUpdateCatalogProductRevision and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateCatalogProductRevision
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateCatalogProductRevision {
        return new WindowsQualityUpdateCatalogProductRevision();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. The display name of the windows quality update catalog product revision. For example, 'Windows 11, version 22H2, build 22621.4112'. Read-only
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'knowledgeBaseArticle' => fn(ParseNode $n) => $o->setKnowledgeBaseArticle($n->getObjectValue([WindowsQualityUpdateProductKnowledgeBaseArticle::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getObjectValue([WindowsQualityUpdateProductBuildVersionDetail::class, 'createFromDiscriminatorValue'])),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'versionName' => fn(ParseNode $n) => $o->setVersionName($n->getStringValue()),
        ];
    }

    /**
     * Gets the knowledgeBaseArticle property value. Represents a knowledge base (KB) article.
     * @return WindowsQualityUpdateProductKnowledgeBaseArticle|null
    */
    public function getKnowledgeBaseArticle(): ?WindowsQualityUpdateProductKnowledgeBaseArticle {
        $val = $this->getBackingStore()->get('knowledgeBaseArticle');
        if (is_null($val) || $val instanceof WindowsQualityUpdateProductKnowledgeBaseArticle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knowledgeBaseArticle'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the osBuild property value. Represents the build version details of a product revision that is associated with a quality update.
     * @return WindowsQualityUpdateProductBuildVersionDetail|null
    */
    public function getOsBuild(): ?WindowsQualityUpdateProductBuildVersionDetail {
        $val = $this->getBackingStore()->get('osBuild');
        if (is_null($val) || $val instanceof WindowsQualityUpdateProductBuildVersionDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuild'");
    }

    /**
     * Gets the productName property value. The product name of the windows quality update catalog product revision. For example, 'Windows 11'. Read-only
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the releaseDateTime property value. The date and time when the windows quality update catalog product revision was released. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. Read-only
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('releaseDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseDateTime'");
    }

    /**
     * Gets the versionName property value. The version name of the windows quality update catalog product revision. For example, '22H2'. Read-only
     * @return string|null
    */
    public function getVersionName(): ?string {
        $val = $this->getBackingStore()->get('versionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('knowledgeBaseArticle', $this->getKnowledgeBaseArticle());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('osBuild', $this->getOsBuild());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeStringValue('versionName', $this->getVersionName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the displayName property value. The display name of the windows quality update catalog product revision. For example, 'Windows 11, version 22H2, build 22621.4112'. Read-only
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the knowledgeBaseArticle property value. Represents a knowledge base (KB) article.
     * @param WindowsQualityUpdateProductKnowledgeBaseArticle|null $value Value to set for the knowledgeBaseArticle property.
    */
    public function setKnowledgeBaseArticle(?WindowsQualityUpdateProductKnowledgeBaseArticle $value): void {
        $this->getBackingStore()->set('knowledgeBaseArticle', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osBuild property value. Represents the build version details of a product revision that is associated with a quality update.
     * @param WindowsQualityUpdateProductBuildVersionDetail|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?WindowsQualityUpdateProductBuildVersionDetail $value): void {
        $this->getBackingStore()->set('osBuild', $value);
    }

    /**
     * Sets the productName property value. The product name of the windows quality update catalog product revision. For example, 'Windows 11'. Read-only
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the releaseDateTime property value. The date and time when the windows quality update catalog product revision was released. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. Read-only
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the versionName property value. The version name of the windows quality update catalog product revision. For example, '22H2'. Read-only
     * @param string|null $value Value to set for the versionName property.
    */
    public function setVersionName(?string $value): void {
        $this->getBackingStore()->set('versionName', $value);
    }

}
